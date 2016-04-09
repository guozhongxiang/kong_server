<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	
	public function _initialize(){
		if(!session('?admin_id')){
			$this->redirect('/Admin');
		}
	
        $Auth = new \ClassLib\Auth();
        $Auth->init(session('group_id'));
        
        if (!$Auth->check()) {
			$this->error('无权限');
        }
        $this->assign('menu_list', $Auth->getGroupMenuList());

	}

}