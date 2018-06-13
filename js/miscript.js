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

        var styleCss = $('#banner').css('display');
        //alert(flag);
        $("#banner").fadeOut(2000);
        $(".client").fadeOut(2000);
        $(".consult").fadeOut(2000);
        $(".project").fadeOut(2000);
        $(".contact").fadeOut(2000);

        
        $(".servicios").fadeIn(3000);
        $(".logo").addClass("estilo");
        $("header").css({ "background-color": "#141414" });
        if (styleCss == "none") {
            $('#banner').fadeIn(2000);
        }
    });

    $("#client").click(function () {

        var styleCss = $('#banner').css('display');
        //alert(flag);
        $("#banner").fadeOut(2000);
        $(".servicios").fadeOut(2000);
        $(".consult").fadeOut(2000);
        $(".project").fadeOut(2000);
        $(".contact").fadeOut(2000);

        
        $(".client").fadeIn(3000);
        $(".logo").addClass("estilo");
        $("header").css({ "background-color": "#141414" });
        if (styleCss == "none") {
            $('#banner').fadeIn(2000);
        }
    });

    $("#consult").click(function () {

        var styleCss = $('#banner').css('display');
        //alert(flag);
        $("#banner").fadeOut(2000);
        $(".servicios").fadeOut(2000);
        $(".client").fadeOut(2000);
        $(".project").fadeOut(2000);
        $(".contact").fadeOut(2000);

        
        $(".consult").fadeIn(3000);
        $(".logo").addClass("estilo");
        $("header").css({ "background-color": "#141414" });
        if (styleCss == "none") {
            $('#banner').fadeIn(2000);
        }
    });

    $("#project").click(function () {

        var styleCss = $('#banner').css('display');
        //alert(flag);
        $("#banner").fadeOut(2000);
        $(".servicios").fadeOut(2000);
        $(".consult").fadeOut(2000);
        $(".client").fadeOut(2000);
        $(".contact").fadeOut(2000);

        
        $(".project").fadeIn(3000);
        $(".logo").addClass("estilo");
        $("header").css({ "background-color": "#141414" });
        if (styleCss == "none") {
            $('#banner').fadeIn(2000);
        }
    });
    $("#contact").click(function () {

        var styleCss = $('#banner').css('display');
        //alert(flag);
        $("#banner").fadeOut(2000);
        $(".servicios").fadeOut(2000);
        $(".consult").fadeOut(2000);
        $(".project").fadeOut(2000);
        $(".client").fadeOut(2000);

        
        $(".project").fadeIn(3000);
        $(".logo").addClass("estilo");
        $("header").css({ "background-color": "#141414" });
        if (styleCss == "none") {
            $('#banner').fadeIn(2000);
        }
    });

    $("#ini").click(function () {
        $("#banner").fadeIn(3000);
        $(".client").fadeIn(2000);
        $(".servicios").fadeIn(2000);
        $(".consult").fadeIn(2000);
        $(".project").fadeIn(2000);
        $(".contact").fadeIn(2000);
    });

});
/*
$(document).ready(function () {

    $("#banner").css({ "height": $(window).height() + "px" });
    var stylCss = $('#banner').css('display');
    var flag = false;
    var scroll;
    

    $(window).scroll(function () {
        scroll = $(window).scrollTop();
        var stylCss = $('#banner').css('display');
        if (scroll > 5) {
            if (!flag) {
                $("#logo").css({ "margin-top": "-5px", "width": "50px", "height": "50px" });

                $("header").css({ "background-color": "#4A5050" })
                flag = true;
            }

        } else {
            if (flag && stylCss!="none") {
                alert(stylCss);
                $("#logo").css({ "margin-top": "150px", "width": "250px", "height": "250px" });

                $("header").css({ "background-color": "transparent" })
                flag = false;
            }
        }


    });

    $(".services").click(function () {

       
        var styleCss = $('#banner').css('display');
        $("#banner").fadeOut(3000);
        if (!flag) {
            //alert("Value of style display: "+styleCss);
            $("#logo").css({ "margin-top": "-5px", "width": "50px", "height": "50px" });

            $("header").css({ "background-color": "#4A5050" })
            flag = true;
        }
        $("#tituloservicios").fadeIn(5000);
        if(styleCss=="none"){
            $('#banner').fadeIn(2000);
        }
    });
    $(".ini").click(function(){
        $("#banner").fadeIn(3000);
        if (flag) {
            $("#logo").css({ "margin-top": "-5px", "width": "50px", "height": "50px" });

            $("header").css({ "background-color": "#4A5050" })
            flag = false;
        }
    });

});*/