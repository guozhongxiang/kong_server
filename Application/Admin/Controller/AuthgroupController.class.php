<?php
namespace Admin\Controller;
use Think\Controller;
class AuthgroupController extends BaseController {

	public function index() {
		$authGroup=M('authGroup');
		$count= $authGroup->count();
		$Page= new \Think\Page($count,30);
		$Page->setConfig('prev',"«"); 
		$Page->setConfig('next',"»"); 
		$Page->setConfig('theme',"共%TOTAL_ROW%条数据 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); 
		$pagehtml =	$Page->show();// 分页显示输出
		
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$group_list = $authGroup
							->field(true)
							->limit($Page -> firstRow.','.$Page -> listRows) 
							->select();

		$this->assign('pagehtml',$pagehtml);// 赋值分页输出
		$this->assign('group_list',$group_list);
		
		$this->display();
	}

	public function add() {
		$this->assign('action', '/admin/Authgroup/addSave');
		$this->display('/authgroup/setAuth');
	}

	public function addsave(){
		$group_name = trim(I('post.group_name', '', 'string'));
		if (empty($group_name)) {
			$this->error('权限组名称不能为空');
		}
		
		$auth_access = I('post.auth_access', null, null);
		if (empty($auth_access)) {
			$this->error('未选择任何权限');
		}

		$authGroup = M('authGroup');
		$data['auth_access_str'] = strtolower(implode(',', $auth_access));
		$data['group_name'] = $group_name;
		$i = $authGroup->add($data);
		if ($i>0) {
			$this->success('修改权限组成功', '/admin/Authgroup');
		} else {
			$this->error('修改失败');
		}
	}

	public function edit() {
		$id = I('get.id', 0, 'int');
		if (empty($id)) {
			$this->error('参数不全');
		}
		$authGroup = M('authGroup');
		$data = $authGroup->field(true)->find($id);

		if(empty($data)){
			$this->error('查询失败');
		}
		
		$id = I('get.id', 0, 'int');
		if (empty($id)) {
			$this->error('非法请求');
		}
		$authGroup = M('authGroup');
		$data = $authGroup->find($id);
		if (empty($data)) {
			$this->error('没有此权限组');
		}

		$Auth = new \ClassLib\Auth();
        $Auth->init($id);
		$auth_array = $Auth->getAllAuth();
		$this->assign('auth_array', $auth_array);
		
		$this->assign('id', $id);
		$this->assign('group_name',$data['group_name']);
		$this->assign('action', '/admin/Authgroup/editSave');
		
		$this->display('/authgroup/setAuth');
	}

	public function editSave() {
		$auth_access = I('post.auth_access', null, null);
		if (empty($auth_access)) {
			$this->error('未选择任何权限');
		}

		$id = I('post.id', 0, 'int');
		$group_name = trim(I('post.group_name', '', 'string'));
		if (empty($id) || empty($group_name)) {
			$this->error('非法请求');
		}
		$authGroup = M('authGroup');
		$data = $authGroup->find($id);
		if (empty($data)) {
			$this->error('没有此权限组');
		}

		$data['id'] = $id;
		$data['auth_access_str'] = strtolower(implode(',', $auth_access));
		$data['group_name'] = $group_name;
		$i = $authGroup->save($data);
		
		if ($i>=0) {
			$this->success('修改权限组成功', '/admin/Authgroup');
		} else {
			$this->error('修改失败');
		}
	}
}