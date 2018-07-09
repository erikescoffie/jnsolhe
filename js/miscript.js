$(document).ready(function () {

    var flag = false;
    var scroll;

    $(window).scroll(function () {
        scroll = $(window).scrollTop();

        if (scroll > 0) {
            $(".logo").addClass("estilo");
            $("header").css({ "background-color": "#141414" });

        } else {
            var bannerCss = $('#banner').css('display');
            if (bannerCss != "none") {
                $(".logo").removeClass("estilo");
                $("header").css({ "background-color": "black" });
                //alert(flag);
            }
        }
    });
    $("#services").click(function () {
        $('.servicios').removeClass('hideContent');
        var styleCss = $('#banner').css('display');

        if (styleCss == "none") {
            $('.client').addClass('hideContent');
            $('.consult').addClass('hideContent');
            $('.project').addClass('hideContent');
            $('.contact').addClass('hideContent');
        } else {
            $('#banner').hide('slow', function() {
                $(".logo").addClass("estilo");
                $('.client').addClass('hideContent');
                $('.consult').addClass('hideContent');
                $('.project').addClass('hideContent');
                $('.contact').addClass('hideContent');
            });
        }
    });

    $("#client").click(function () {
        $('.client').removeClass('hideContent');

        var styleCss = $('#banner').css('display');
        if (styleCss == "none") {
            $('.servicios').addClass('hideContent');
            $('.consult').addClass('hideContent');
            $('.project').addClass('hideContent');
            $('.contact').addClass('hideContent');
        } else {
            $('#banner').hide('slow', function () {
                $('.logo').addClass('estilo');
                $('.servicios').addClass('hideContent');
                $('.consult').addClass('hideContent');
                $('.project').addClass('hideContent');
                $('.contact').addClass('hideContent');
            });            
        }
    });

    $("#consult").click(function () {
        $('.consult').removeClass('hideContent');
        var styleCss = $('#banner').css('display');
        if (styleCss == "none") {
            $('.servicios').addClass('hideContent');
            $('.client').addClass('hideContent');
            $('.project').addClass('hideContent');
            $('.contact').addClass('hideContent');
        } else {
            $('#banner').hide('slow', function () {
                $(".logo").addClass("estilo");
                $('.servicios').addClass('hideContent');
                $('.client').addClass('hideContent');
                $('.project').addClass('hideContent');
                $('.contact').addClass('hideContent');
            });
            
         }
    });

    $("#project").click(function () {
        $('.project').removeClass('hideContent');
        $('.project').fadeIn(500);
        var styleCss = $('#banner').css('display');
        
        if (styleCss == "none") {
            $('.servicios').addClass('hideContent');
            $('.client').addClass('hideContent');
            $('.contact').addClass('hideContent');
            $('.consult').addClass('hideContent');
        } else {
            $('#banner').hide('slow', function (){
                $(".logo").addClass("estilo");
                $('.servicios').addClass('hideContent');
                $('.client').addClass('hideContent');
                $('.contact').addClass('hideContent');
                $('.consult').addClass('hideContent');
            });
        }
    });
    $("#contact").click(function () {
        $('.contact').removeClass('hideContent');

        var styleCss = $('#banner').css('display');
        if (styleCss == "none") {
            $('.client').addClass('hideContent');
            $('.servicios').addClass('hideContent');
            $('.consult').addClass('hideContent');
            $('.project').addClass('hideContent');
        } else {
            $('#banner').hide('slow', function () {
                $(".logo").addClass("estilo");
                $('.client').addClass('hideContent');
                $('.servicios').addClass('hideContent');
                $('.consult').addClass('hideContent');
                $('.project').addClass('hideContent');
            });
        }
    });

    $("#ini").click(function () {
        $("#banner").fadeIn(3000);
        $(".client").removeClass('hideContent');
        $(".servicios").removeClass('hideContent');
        $(".consult").removeClass('hideContent');
        $(".project").removeClass('hideContent');
        $(".contact").removeClass('hideContent');
    });

});