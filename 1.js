$(function(){
	// wow
    new WOW().init();
    // couter
    $('.so').counterUp({
	    delay: 10,
	    time: 5000
	});
    // fancybox
	$("._1sanpham").fancybox({
		padding: 0,

		openEffect : 'elastic',
		openSpeed  : 150,

		closeEffect : 'elastic',
		closeSpeed  : 150,

		closeClick : true,

		helpers : {
			overlay : null
		}
	});
})  
 