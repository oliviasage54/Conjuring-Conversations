
 /*JQuery for responsive mobile nav
 rewatch this video for full explanation
https://www.youtube.com/watch?v=97njQRCVxPU */

jQuery(document).ready(function(){

    jQuery(".menuButton").click(function(){
        jQuery(".navDiv").slideToggle(400, function(){
            jQuery(this).toggleClass("navExpanded").css('display','')
        });
    });
});


