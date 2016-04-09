<?php
function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true)
{
    if(function_exists("mb_substr")){
            if ($suffix && strlen($str)>$length)
                return mb_substr($str, $start, $length, $charset)."...";
        else
                 return mb_substr($str, $start, $length, $charset);
    }
    elseif(function_exists('iconv_substr')) {
            if ($suffix && strlen($str)>$length)
                return iconv_substr($str,$start,$length,$charset)."...";
        else
                return iconv_substr($str,$start,$length,$charset);
    }
    $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
    $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
    $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
    $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
    preg_match_all($re[$charset], $str, $match);
    $slice = join("",array_slice($match[0], $start, $length));
    if($suffix) return $slice."…";
    return $slice;
}

/**
 *  获得当前的页面文件的url
 *
 * @access    public
 * @return    string
 */
function GetCurUrl()
{
	if(!empty($_SERVER['REQUEST_URI']))
	{
		$nowurl = $_SERVER['REQUEST_URI'];
		$nowurls = explode('?', $nowurl);
		$nowurl = $nowurls[0];
	}
	else
	{
		$nowurl = $_SERVER['PHP_SELF'];
	}
	return $nowurl;
}
/**
 *  支付接口响应
 *
 */
function ActiveOrder($payid,$total,$trade_no='')
{
	$pay=M('pay');
	$order=M('order');
	$paydata = $pay->where(array('pay_id'=>$payid))->find();
	if(empty($paydata)){
		//不存在这个支付单
		return false;
	}
	/* if($total<$paydata['total'])
	{
		//付款不足
		return false;
	} */
	if($paydata['status']>0)
	{
		//订单已经处理过了	
		return false;
	}
	//更新支付单表
	$data['oktime']=time();
	$data['status']=1;
	$data['trade_no']=$trade_no;//保存支付宝内部交易号
	$pay->where(array('id'=>$paydata['id']))->save($data);
	//批量更新订单状态
	$order_array=explode("_",$paydata['order_str']);
	array_pop($order_array);
	$orderdata['pay_time']=time();
	$orderdata['pay_id']=$paydata['pay_id'];
	$orderdata['status']=2;
	//$orderdata['pay_type']=(int)$paydata['pay_type'];
	foreach($order_array as $key=>$order_id){
		$order->where(array('id'=>$order_id))->save($orderdata);
	}
	//给会员加积分
	$vip=M('vip');
	$jifen=(int)$paydata['total'];
	$vip->where(array('id'=>$paydata['vip_id']))->setInc('jifen',$jifen);
}
 
 
 
 
 
 
 
 
 
 
 

