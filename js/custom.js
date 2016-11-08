$(document).ready(function(){
		
	$('.mob-Nav .menu ul li a').click(function(){
		$(this).parent().children('ul').slideToggle();
	});

	$('.mob-Nav').click(function() {
		$('.mob-Nav .menu').animate({
			right : '-250px'
		},function(){
			$(this).parent().fadeOut();
		});
		
		$('.icon-nav a').removeClass('active');
	});

	$('.mob-Nav .menu').click(function(event){
		event.stopPropagation();
	});
	
	$(".icon-nav a").click(function(){
    
        $('.icon-nav a').toggleClass('active');
		
		$('.mob-Nav').fadeIn().css({
			display : 'flex'
		}).find('.menu').animate({
			right : '-15px'
		})
    });
	
	/***************/

	
});













