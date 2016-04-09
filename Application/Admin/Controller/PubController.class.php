<?php
namespace Admin\Controller;
use Think\Controller;
class PubController extends Controller {
   
    //设置验证码
    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 36;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->codeSet = '0123456789'; 
        $Verify->fontttf = '5.ttf'; 
        $Verify->entry();
    }
	
	//ajax检查验证码是否正确
	public function checkverify(){
		if(!IS_POST){
			$this->error('非法请求');
		}
		$telephone=trim(I('post.txtLoginCode','','string'));
		$txtValidCode=trim(I('post.txtValidCode','','string'));
		
		$verify = new \Think\Verify(); 
		if(!$verify->check($txtValidCode, '')){
			$this->error('验证码错误');  
		}
		$this->success('ok');
	}
	
	public function sendmes(){
		$mobile=trim(I('post.mobile','','string'));
		if(!IS_POST){
			$this->error('非法请求');
		}
		if((time()-session('time'))<60){
			$this->error('60秒后方可进行重新发送请求');
		}
		
		$Smscode = new \ClassLib\Smscode(); 
		$i=$Smscode->sms($mobile);
		if($i==0){
			$this->success('成功'.(session('time')).'发送'.$i);
		}else{
			$this->error('发送'.(session('time')).'失败'.$i);
		}
	}
	
	
//城市选择联动ajax
	public function getAreaOptionAjax(){
		if (!IS_GET) {
			$this->error('非法请求');
		}
		$tid = I('get.tid',0,'int');
		$level = I('get.level',0,'int');
		if ($tid==0 || $level==0 ) {
			$this->error('无');
		}
		
		$option_html='<option value="0">请选择</option>';
		if ($level==1) {
			$AreaProvincial=M('AreaProvincial');
			$list=$AreaProvincial->field('id,area_name')->select();
		}

		if ($level==2) {
			$AreaMunicipal=M('AreaCity');
			$map['tid'] = array('eq',$tid);
			$list=$AreaMunicipal->field('id,area_name')->where($map)->select();
		}

		if ($level==3) {
			$AreaCounty=M('AreaCounty');
			$map['tid'] = array('eq',$tid);
			$list=$AreaCounty->field('id,area_name')->where($map)->select();
		}

		$len=count($list);
		for ($i=0; $i < $len; $i++) { 
			$option_html=$option_html.'<option value="'.$list[$i]['id'].'">'.$list[$i]['area_name'].'</option>';
		}
		$data['status']  = 1;
		$data['content'] = $option_html;
		$this->ajaxReturn($data,'json');
	}
}