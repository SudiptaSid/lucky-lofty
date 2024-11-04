// ==================== scroollto top js ======================
$(document).on('scroll',function(){
	var pos = $(this).scrollTop();
	if(pos < 1){
		$('#scrolltotop').addClass('scrollhide');
	}
	else{
		$('#scrolltotop').removeClass('scrollhide');
	}
	
});
$(document).ready(function(){ 
    $('#scrolltotop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 2000);
        return false;
    });
});
// ====================== Banner Slider  ======================
$('#banner_slider').owlCarousel({
    margin:0,
    items: 1,
    nav:true,
    navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"], 
    dots:false,
    loop:true,
    smartSpeed:2000,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsiveClass:true, 
});
// ====================== Leaderboard Slider  ======================
// $('.leaderboard_slider').owlCarousel({
//     margin:0,
//     items: 1,
//     nav:false,
//     navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"], 
//     dots:true,
//     loop:true,
//     smartSpeed:2000,
//     autoplay: true,
//     autoplayTimeout: 4000,
//     autoplayHoverPause: true,
//     responsiveClass:true, 
// });
// ==================== Date Piker ==================== 
$( function() {
    $( ".datepicker" ).datepicker();
});