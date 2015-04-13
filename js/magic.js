$(function(){
	section = $('body').attr('section');
	windowHeight = $(window).height();

	// Intro
	$(window).scrollTop(0);
	
	$('body').jpreLoader({
		loaderVPos: '50%',
		autoClose: true,
		closeBtnText: ""
	}, function() { //callback function
		$('body').css('overflow', 'visible');
		$('#main').css('opacity', '1');
	});

	$('.product a').click(function(event){
		event.preventDefault();
		newLocation = $(this).attr("href");
		$('#main').css('opacity', '0');
		window.location = newLocation;
	});

	$(window).scroll(function(){
		revealOnScroll();

		if(section == 'home'){
			var fadeStart = ($(window).height()*0.6);
			var offset = $(document).scrollTop()
			if(offset<=fadeStart){
				$('.brandbox, #cartbutton').removeClass('on');
				$('.arrow').css('opacity','1').addClass('on');
			}else {
				$('.brandbox, #cartbutton').addClass('on');
				$('.arrow').css('opacity','0').removeClass('on');
			}
		}
		
	});
});
function revealOnScroll(){
	var scrolled = $(window).scrollTop();
	$(".revealOnScroll:not(.animated)").each(function(){
		var $this = $(this),
		offsetTop = $this.offset().top;
 
		if (scrolled + windowHeight > offsetTop){
			$this.addClass('animated');
		}
	});
}


