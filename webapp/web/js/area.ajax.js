
$(function(){
	var $provincial=$('#provincial');
	var $municipal=$('#municipal');
	var $county=$('#county');

	$.getJSON("/index.php?mod=pub&act=getAreaOptionAjax&type=admin",{level:1},function(data) {
		if (data.errCode==1) {
			$provincial.html(data['data']);
		};
	});

	$provincial.change(function() {
		$e=$(this);
		$municipal.find('option').remove();
		$county.find('option').remove();
		$county.append($('<option value="0">请选择</option>'));
		$.getJSON("/index.php?mod=pub&act=getAreaOptionAjax&type=admin",{tid:$e.val(),level:2},function(data) {
			if (data.errCode==1) {
				$municipal.html(data['data']);
			};
		});
	});

	$municipal.change(function() {
		$e=$(this);
		$county.find('option').remove();
		$.getJSON("/index.php?mod=pub&act=getAreaOptionAjax&type=admin",{tid:$e.val(),level:3},function(data) {
			if (data.errCode==1) {
				$county.html(data['data']);
			};
		});
	});
	
});