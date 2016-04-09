<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

	public function index(){
		if(session('?admin_id')){
			$this->redirect('/admin/home');
		}
		$this->display();
	}
	
	public function logout(){
		session(null);
		$this->redirect('/admin');
	}
	
	
	public function check(){
		$admin_name=trim(I('post.nameTex','','string'));
		$password=trim(I('post.password','','string'));
		$verifycode=trim(I('post.verifycode','','string'));
		
		if(empty($admin_name)||empty($password) || !IS_POST){
			$this->error('非法请求','/admin');
		}
		
		$verify = new \Think\Verify(); 
		if(!$verify->check($verifycode, '')){
			$this->error('验证码错误','/admin');  
		}
		
		$admin=M('admin');
		$a['admin_name']=$admin_name;
		$a['password']=md5($password);
		
		$admin_info=$admin->field('kong_admin.id, kong_admin.admin_name, kong_admin.group_id, kong_admin.login_num, kong_auth_group.group_name')
							->where($a)
							->join('left join kong_auth_group ON kong_auth_group.id = kong_admin.group_id')
							->find();
		
		
		if($admin_info['id']>0){
			//写入session
			session('admin_id',$admin_info['id']); 
			session('admin_name',$admin_info['admin_name']); 
			session('group_id',$admin_info['group_id']); 
			session('group_name',$admin_info['group_name']); 
			
			$time = time();
			$ip = get_client_ip();
			//更新登录时间，次数 ip
			$l['id'] = $admin_info['id'];
			$l['last_time'] = $time;
			$l['last_ip'] = $ip;
			$l['login_num'] = $admin_info['login_num']+1;
			$admin->save($l);
			
			$this->redirect('/admin/home');
		}else{
			$this->error('账号或者密码错误','/admin');  
		}
	}
	

}