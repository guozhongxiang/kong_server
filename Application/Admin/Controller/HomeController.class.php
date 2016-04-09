<?php
namespace Admin\Controller;
use Think\Controller;
class HomeController extends BaseController {

	public function index(){
		if(!session('?admin_id')){
			$this->redirect('/admin');
		}
		$this->display();
	}
	

}