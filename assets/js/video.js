		if($(".bg-container-youtube").is(':visible')){
    if($(window).width() >= 960){
        $('.player').mb_YTPlayer();
    }
    else{
        $(".bg-container-youtube").backstretch([
            "assets/images/slideshow/sample.jpg",		//-- CHANGE WITH YOUR IMAGE URL
            "assets/images/slideshow/sample2.jpg"
            ],{
            duration:6000,
            fade:'normal'
        });
    }
}

 $('#play-video').on('click', function(ev) {
    $("#video")[0].src += "&autoplay=1";
    ev.preventDefault();
  });