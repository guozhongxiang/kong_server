<?php
namespace ClassLib;

class Auth {
					
	private $current_uri = '';
	private $auth_access_arr = array();
	private $authGroup = null;

	public function __construct() {
		$this->authGroup = M('authGroup');
    }
    
	//判断是否有权限
	public function check() {
		return in_array($this->current_uri, $this->auth_access_arr);
	}

	public function init($groupid) {
		$this->current_uri = strtolower(MODULE_NAME.'_'.CONTROLLER_NAME.'_'.ACTION_NAME);
		$data = $this->authGroup->field('auth_access_str')->where('id=' . $groupid)->find();
		if (!empty($data['auth_access_str'])) {
			$this->auth_access_arr = explode(',', $data['auth_access_str']);
		}
	}
	
	
	/*
		array(
			'title'	=> '管理员后台首页',
			'item'	=>	array(
				array('admin_home_index',		'后台默认首页',		false),
			),
		),
	*/
	public function getAllAuth() {
		foreach ($this->auth_show_group as $key1=>$group_item) {
			foreach ($group_item['item'] as $key2=>$item) {
				if (in_array($item[0], $this->auth_access_arr)) {
					$this->auth_show_group[$key1]['item'][$key2][2] = true;
				}
			}
		}
		return $this->auth_show_group;
	}
	
	public function getGroupMenuList() {
		$auth_access_arr = array_flip($this->auth_access_arr);
        $menu = $this->menu;
        foreach ($menu as $key => $value) {
        	if (isset($auth_access_arr[$key])) {
        		unset($menu[$key]);
				$menu_data[] = array('url'=>'/' . str_replace('_', '/', $key), 'title'=>$value);
        	}
        }
        return $menu_data;
	}
	
	//获取用户组列表
	public function getAuthGroupList() {
		return $this->authGroup->field(true)->select();
	}

	//获取用户组id groupname list
	public function getGroupIdNameArr() {
		$list = $this->authGroup->field(true)->select();
		$arr = array();
		foreach ($list as $value) {
			$arr[$value['id']] = $value['group_name'];
		}
		return $arr;
	}

	//修改管理员所属组
	public function changeAdminAuthGroup($adminid, $groupid) {
		$admin = M('admin');
		$data['id'] = $adminid;
		$data['groupid'] = $groupid;
		$i = $admin->save($data);

		if ($i>=0) {
			return true;
		} 
		return false;
	}
	
	private $menu = array(	
		'admin_index_index'		=> '后台首页',
		'admin_order_index'		=> '订单管理',
		
		'admin_manage_index'	=> '管理员管理',
		'admin_authgroup_index'	=> '权限组管理',
		
		
		'admin_select_index'	=> '自定义类别管理',
		'admin_sysconfig_index'	=> '系统配置',
	);
					
	private $auth_show_group = array(
		array(
			'title'	=> '管理员后台首页',
			'item'	=>	array(
				array('admin_home_index',		'后台默认首页',		false),
			),
		),
		array(
			'title'	=> '管理员管理',
			'item'	=>	array(
				array('admin_manage_index',		'管理员列表',		false),
				array('admin_manage_add',		'管理员添加',		false),
				array('admin_manage_addsave',	'管理员添加保存',	false),
				array('admin_manage_edit',		'查看管理员详情',	false),
				array('admin_manage_editsave',	'管理员编辑保存',	false),
				array('admin_manage_del',		'删除管理员',		false),
			),
		),
		array(
			'title'	=> '权限组管理',
			'item'	=>	array(
				array('admin_authgroup_index',		'权限组列表',		false),
				array('admin_authgroup_add',		'权限组添加',		false),
				array('admin_authgroup_addsave',	'权限组添加保存',	false),
				array('admin_authgroup_edit',		'查看权限组详情',	false),
				array('admin_authgroup_editsave',	'权限组修改保存',	false),
			),
		),
		array(
			'title'	=> '自定义类别管理',
			'item'	=>	array(
				array('admin_select_index',			'自定义类别管理',		false),
				array('admin_select_add',			'自定义类别添加',		false),
				array('admin_select_addsave',		'自定义类别添加保存',	false),
				array('admin_select_edit',			'自定义类别编辑',		false),
				array('admin_select_editsave',		'自定义类别编辑保存',	false),
				array('admin_select_enum',			'自定义字段管理',		false),
				array('admin_select_enumadd',		'自定义字段添加',		false),
				array('admin_select_enumaddsave',	'自定义字段添加保存',	false),
				array('admin_select_enumedit',		'自定义字段编辑',		false),
				array('admin_select_enumeditsave',	'自定义字段编辑保存',	false),
				array('admin_select_cachecreate',	'生成自定义类别缓存',	false),
			),
		),
		
	);
}