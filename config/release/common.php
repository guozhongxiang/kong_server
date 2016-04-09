<?php
class Cfg_Common
{
	public static $order_status = array(
							'-1' => '已删除',
							'0'  => '未派单',
							'10' => '派单',
							'20' => '接单',
							'30' => '提交工单',
							'40' => '确认工单',
							'50' => '定价',
							'60' => '付款'
		);

	public static $change_url 	= array(
							'-1' => '#',
							'0'  => "index.php?mod=order&act=orderAssginAjax",
							'10' => "index.php?mod=order&act=orderTakingAjax",
							'20' => "index.php?mod=order&act=orderSubmitWorkerOrderAjax",
							'30' => "index.php?mod=order&act=orderWorkerOrderConfirmAjax",
							'40' => "index.php?mod=order&act=orderMakePriceAjax",
							'50' => "index.php?mod=order&act=orderPayAjax",
							'60' => '#'
		);
}
