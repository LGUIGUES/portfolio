/* Resource free of p3fx.fr */
$('<div></div>')
		.attr('id','scrolltotop')
		.hide()
		.css({'z-index':'1000','position':'fixed','bottom':'1rem','right':'1rem','cursor':'pointer','width':'3rem','height':'3rem','background':'rgba(0,0,0,.5)'})
		.appendTo('body')
		.click(function(){
			$('html,body').animate({scrollTop: 0}, 'slow');
		});
	$('<div></div>')
		.css({'width':'0.6rem','height':'0.6rem','transform':'rotate(-135deg)','border':'solid #ffffff','border-width':'0 0.3rem 0.3rem 0','padding':'0.3rem','margin-top':'1rem','margin-left':'1rem'})
		.appendTo('#scrolltotop');
	$(window).scroll(function(){
		if($(window).scrollTop()<500){
			$('#scrolltotop').fadeOut();
		}else{
			$('#scrolltotop').fadeIn();
		}
	});