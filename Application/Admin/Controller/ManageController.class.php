<?php
namespace Admin\Controller;
use Think\Controller;
class ManageController extends BaseController {

	public function index(){
		$groupid = I('get.groupid', 0, 'int');
		$where = array();
		if (!empty($groupid)) {
			$where['groupid'] = $groupid;
			$this -> assign('groupid', $groupid);
		}
		$admin_name = I('get.admin_name', '', 'string');

		if (!empty($admin_name)) {
			$where['admin_name'] = array('like','%' . $admin_name . '%');
			$this -> assign('admin_name', $admin_name);
		}

		$admin=M('admin');
		$count= $admin->where($where)->count();
		$Page= new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(15)
		$Page->setConfig('prev',"«"); 
		$Page->setConfig('next',"»"); 
		$Page->setConfig('theme',"共%TOTAL_ROW%条数据 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%"); 
		$pagehtml =	$Page->show();// 分页显示输出
		
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$admin_list = $admin
							->field(true)
							->where($where)
							->order('last_time desc')
							->limit($Page -> firstRow.','.$Page -> listRows) 
							->select();

		$this -> assign('pagehtml',$pagehtml);// 赋值分页输出
		$this -> assign('admin_list',$admin_list);

        $Auth = new \ClassLib\Auth();
		$this -> assign('GroupIdNameArr', $Auth->getGroupIdNameArr());

		$this->display();
	}
	
	public function add(){
        $Auth = new \ClassLib\Auth();
		$this -> assign('GroupIdNameArr', $Auth->getGroupIdNameArr());
		$this->display();
	}
	
	public function addsave(){
		if(!IS_POST){
			$this->error('非法请求');
		}
		$admin=M('admin');
		
		
		$a['groupid']=I('post.groupid','','int');
		if(empty($a['groupid'])){
			$this->error('未选择权限组');
		}
		$a['admin_name']=trim(I('post.admin_name','','string'));
		if(empty($a['admin_name'])){
			$this->error('未填写名字');
		}
		
		$have_name=$admin->where("admin_name='".$a['admin_name']."'")->count();
		if($have_name>=1){
			$this->error('不能注册重复的用户');
		}
		
		$password1=trim(I('post.password1','','string'));
		$password2=trim(I('post.password2','','string'));
		if($password1!==$password2){
			$this->error('两次密码不一致');
		}
		if(strlen($password1)<6){
			$this->error('密码长度不能小于6位');
		}
		$a['password']=md5($password1);
		
		$a['lock']=I('post.lock','','int');
		if($a['lock']===''){
			$this->error('未选择账户锁定状态');
		}
		
		$a['qq']=trim(I('post.qq','','string'));
		$a['aliwangwang']=trim(I('post.aliwangwang','','string'));
		
		$i=$admin->add($a);
		if($i>0){
			$this->success('添加成功','/admin/manage');
		}else{
			$this->error('添加失败');
		}
	}
	
	public function edit(){
		$id=I('get.id','','int');
		if(!IS_GET||empty($id)){
			$this -> error('非法请求');
		}
		$admin=M('admin');
		$admin_date=$admin->field(true)->find($id);
		if(empty($admin_date)){
			$this->error('查询失败');
		}
		$this -> assign('admin_date',$admin_date);
		
		$loginlog = M('loginLog');
		$loginlog_list = $loginlog->field(true)->where(array('admin_id'=>$id))->limit(20)->select();
		$this -> assign('loginlog_list', $loginlog_list);
		
        $Auth = new \ClassLib\Auth();
		$this -> assign('GroupIdNameArr', $Auth->getGroupIdNameArr());
		$this->display();
	}
	
	public function editsave(){
		$id=I('post.id','','int');
		if(!IS_POST || empty($id)){
			$this->error('非法请求');
		}
		$a['id']=$id;
		$a['groupid']=I('post.groupid','','string');
		if(empty($a['groupid'])){
			$this->error('未选择权限组');
		}
		$a['admin_name']=trim(I('post.admin_name','','string'));
		if(empty($a['admin_name'])){
			$this->error('未填写名字');
		}
		$admin=M('admin');
		
		$password1=trim(I('post.password1','','string'));
		if(!empty($password1)){
			$password2=trim(I('post.password2','','string'));
			if($password1!==$password2){
				$this->error('两次密码不一致');
			}
			if(strlen($password1)<6){
				$this->error('密码长度不能小于6位');
			}
			$a['password']=md5($password1);
		}

		$a['lock']=I('post.lock','','string');
		if($a['lock']===''){
			$this->error('未选择账户锁定状态');
		}
		$a['qq']=trim(I('post.qq','','string'));
		$a['aliwangwang']=trim(I('post.aliwangwang','','string'));
		
		$i=$admin->save($a);
		if($i==1){
			$this->success('修改成功','/admin/manage');
		}elseif($i==0){
			$this->success('无任何修改','/admin/manage');
		}else{
			$this->error('修改失败');
		}
	}
	
	public function del(){
		$id=I('get.id','','int');
		if(!IS_GET||empty($id)){
			$this -> error('非法请求');
		}
		$admin=M('admin');
		$i=$admin->delete($id);
		
		if($i==1){
			$this->success('删除成功','/admin/manage');
		}elseif($i==0){
			$this->success('没有删除任何用户','/admin/manage');
		}else{
			$this->error('删除失败');
		}
	}	
}