<?php
namespace Admin\Controller;
use Think\Controller;
class SelectController extends BaseController {

	public function index(){
		$select=M('sysSelect');
		$select_list=$select->field(true)->select();
		$this -> assign('select_list',$select_list);
		$this->display();
	}
	
	
	public function add(){
		$this->display();
	}
	
	
	public function addsave(){
		if(!IS_POST){
			$this->error('非法请求');
		}
		$select=M('sysSelect');
		
		$s['itemname']=I('post.itemname','','string');
		if(empty($s['itemname'])){
			$this->error('请填写类别名');
		}
		$s['itemgroup']=trim(I('post.itemgroup','','string'));
		if(empty($s['itemgroup'])){
			$this->error('请填写类别标识');
		}
		
		$have_group=$select->where("itemgroup='".$s['itemgroup']."'")->count();
		if($have_group>=1){
			$this->error('类别标识必须唯一');
		}
		
		$i=$select->add($s);
		if($i>0){
			$this->success('添加成功','/admin/select');
		}else{
			$this->error('添加失败');
		}
		
	}
	
	public function edit(){
		$id=I('get.id','','int');
		if(!IS_GET||empty($id)){
			$this -> error('非法请求');
		}
		$select=M('sysSelect');
		$select_date=$select->field(true)->find($id);
		if(empty($select_date)){
			$this->error('查询失败');
		}
		$this -> assign('select_date',$select_date);
		
		$this->display();
	}
	
	public function editsave(){

		$id=I('post.id','','int');
		if(!IS_POST || empty($id)){
			$this->error('非法请求');
		}
		$select=M('sysSelect');
		$s['id']=$id;
		$s['itemname']=I('post.itemname','','string');
		if(empty($s['itemname'])){
			$this->error('请填写类别名');
		}
		$s['itemgroup']=trim(I('post.itemgroup','','string'));
		if(empty($s['itemgroup'])){
			$this->error('请填写类别标识');
		}
		
		$have_group=$select->where("itemgroup='".$s['itemgroup']."'")->count();
		if($have_group>=1){
			$this->error('类别标识必须唯一');
		}
		$i=$select->save($s);
		if($i==1){
			$this->success('修改成功','/admin/select');
		}elseif($i==0){
			$this->success('未修改任何选项','/admin/select');
		}else{
			$this->error('添加失败');
		}
	}
	

	
	//子项字段管理
	public function enum(){
		$itemgroup=trim(I('get.itemgroup','','string'));
		if(empty($itemgroup)){
			$this -> error('非法请求');
		}
		
		$sysSelect=M('sysSelect');
		$select=$sysSelect->field('itemname')->where("itemgroup='".$itemgroup."'")->find();
		$this -> assign('select',$select);
		$this -> assign('itemgroup',$itemgroup);

		$enum=M('sysEnum');
		$enum_list=$enum->field(true)->where("itemgroup='".$itemgroup."'")->select();
		$this -> assign('enum_list',$enum_list);
		
		$this->display();
	}
	
	public function enumAdd(){
		$itemgroup=trim(I('get.itemgroup','','string'));
		if(empty($itemgroup)){
			$this -> error('非法请求');
		}
		
		$sysSelect=M('sysSelect');
		$select=$sysSelect->field('itemname')->where("itemgroup='".$itemgroup."'")->find();
		$this -> assign('itemname',$select['itemname']);
		$this -> assign('itemgroup',$itemgroup);
		
		$this->display();
	}
	
	public function enumAddSave(){
		if(!IS_POST){
			$this->error('非法请求');
		}
		$enum=M('sysEnum');
		
		$e['itemgroup']=I('post.itemgroup','','string');
		if(empty($e['itemgroup'])){
			$this->error('请填写所属类别');
		}
		$e['name']=trim(I('post.name','','string'));
		if(empty($e['name'])){
			$this->error('请填写字段名称');
		}
		$e['sort']=I('post.sort','','int');
		if(empty($e['sort'])){
			$this->error('请填写排序权重');
		}

		$i=$enum->add($e);
		if($i>0){
			$this->success('添加成功','/admin/select/enum/itemgroup/'.$e['itemgroup']);
		}else{
			$this->error('添加失败');
		}
	}
	
	public function enumEdit(){
		$id=I('get.id','','int');
		if(empty($id)){
			$this -> error('非法请求');
		}
		
		$enum=M('sysEnum');
		$enum_date=$enum->field(true)->where('id='.$id)->find();
		$this -> assign('enum_date',$enum_date);
		
		$sysSelect=M('sysSelect');
		$select=$sysSelect->field('itemname')->where("itemgroup='".$enum_date['itemgroup']."'")->find();
		$this -> assign('itemname',$select['itemname']);
		$this -> assign('itemgroup',$enum_date['itemgroup']);
		
		$this->display();
	}
	
	public function enumEditSave(){
		$id=I('post.id','','int');
		if(!IS_POST || empty($id)){
			$this->error('非法请求');
		}
		$enum=M('sysEnum');
		$e['id']=$id;
		$e['itemgroup']=I('post.itemgroup','','string');
		if(empty($e['itemgroup'])){
			$this->error('请填写所属类别');
		}
		$e['name']=trim(I('post.name','','string'));
		if(empty($e['name'])){
			$this->error('请填写字段名称');
		}
		$e['sort']=I('post.sort','','int');
		if(empty($e['sort'])){
			$this->error('请填写排序权重');
		}

		$i=$enum->save($e);
		if($i==1){
			$this->success('修改成功','/admin/select/enum/itemgroup/'.$e['itemgroup']);
		}elseif($i==0){
			$this->success('无任何修改','/admin/select/enum/itemgroup/'.$e['itemgroup']);
		}else{
			$this->error('修改失败');
		}
		
	}
	
	public function cacheCreate(){
		$itemgroup=trim(I('get.itemgroup','','string'));
		if (!IS_GET||empty($itemgroup)) {
			$this->error('非法请求');
		}
		$sysSelect=M('sysSelect');
		$sysEnum=M('sysEnum');
		
		$where['itemgroup']=$itemgroup;
		$select=$sysSelect->field(true)->where($where)->find();

		$enum_list=$sysEnum->field(true)->where($where)->order('sort asc')->select();
		for($i=0,$len=count($enum_list);$i<$len;$i++){
			$enum[$enum_list[$i]['id']]=$enum_list[$i]['name'];
		}
		
        F('select/'.$select['itemgroup'],$enum);
        $this->success('生成缓存成功');
		
	}

}