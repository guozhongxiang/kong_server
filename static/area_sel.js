
$(function(){
	var $provincial=$('#provincial');
	var $municipal=$('#municipal');
	var $county=$('#county');

	$provincial.change(function() {
		$e=$(this);
		$municipal.find('option').remove();
		$county.find('option').remove();
		$county.append($('<option value="0">请选择</option>'));
		$.get("/Pub/getAreaOptionAjax",{tid:$e.val(),level:2},function(data) {
			if (data.status==1) {
				$municipal.html(data.content);
			};
		});
	});

	$municipal.change(function() {
		$e=$(this);
		$county.find('option').remove();
		$.get("/Pub/getAreaOptionAjax",{tid:$e.val(),level:3},function(data) {
			if (data.status==1) {
				$county.html(data.content);
			};
		});
	});
	
});