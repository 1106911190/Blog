$(document).ready(function(){
	$('.slide_body .task_list .task_title').click(function(){
		if($(this).nextAll('li').css('display')=='none'){
			$(this).nextAll('li').slideDown(400);
		}else{
			$(this).nextAll('li').slideUp(500);
		}
	})
	$('.close').click(function(){
		$('.slide').children().slideUp('fast');
		$('.slide').animate({
			'width':'0px'
		},'slow');
		$('body').animate({
			'padding-left': '0px'},
			'slow', function() {
		});
		$('.open').show();
		$('.close').hide();
	})
	$('.open').click(function(){
		$('body').animate({
			'padding-left': '20%'},
			'slow', function() {
			$('.close').show();
		});
		$('.slide').animate({
			'width':'20%'
		},'slow',function(){
		});
		$('.slide').children().slideDown('fast');
		$('.open').hide();
		
	})	
})