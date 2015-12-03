$(document).ready(function(){
	$('.submit').click(function(){
		var username = $('input[name=name]').val();
		var password = $('input[name=password]').val();
		var vcode = $('input[name=vcode]').val();
	if(vcode=="8710"){
		$('form').submit();
	}else{
		alert("Sorry,your code is wrong");
	}
	})
})