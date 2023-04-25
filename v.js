$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.nb').addClass("sticky");
        }else{
            $('.nb').removeClass("sticky");
        }
    });
});
// video galary script
$(document).ready(function(){

    $('.videos video').click(function(){

        $(this).addClass('active').siblings().removeClass('active');

        var src = $(this).attr('src');
        $('.main-video video').attr('src',src);
    });
    //

    $('.nb .menu li a').click(function(){
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });

    // toggle menu/navbar script
    $('.menu-btn').click(function(){
        $('.nb .menu').toggleClass("active");
        $('.menu-btn img').toggleClass("active");
    });
});
