$(document).ready(function(){
	$('.reginster').click(function(){
		var username = $('input[name=name]').val();
		var password = $('input[name=password]').val();
		var email = $('input[name=email]').val();
		var repassword = $('input[name=repassword]').val();
	if(password==repassword){
		$('form').submit();
	}else{
		alert("Sorry,your password is not same");
	}
	})
})