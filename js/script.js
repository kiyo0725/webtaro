jQuery(function ($) {

    /*================================================
                ヘッダーナビ表示・ 非表示
    ==================================================*/

    $("#infoToggle").hover(function () {
        $("#infoNav").stop().fadeIn(300);
    }, function () {
        $("#infoNav").stop().fadeOut(300);
    });

    $("#infoNav").hover(function () {
        $("#infoNav").stop().fadeIn(300);
    }, function () {
        $("#infoNav").stop().fadeOut(300);
    });


    $("#infoToggle,#infoNav").hover(function () {
        $(".masking").stop().fadeIn(300);
    }, function () {
        $(".masking").stop().fadeOut(300);
    });


    $("#businessToggle").hover(function () {
        $("#businessNav").stop().fadeIn(300);
    }, function () {
        $("#businessNav").stop().fadeOut(300);
    });

    $("#businessNav").hover(function () {
        $("#businessNav").stop().fadeIn(300);
    }, function () {
        $("#businessNav").stop().fadeOut(300);
    });

    $("#businessToggle,#businessNav").hover(function () {
        $(".masking").stop().fadeIn(300);
    }, function () {
        $(".masking").stop().fadeOut(300);
    });
    /*================================================
              タブ切り替え
    ==================================================*/
    $('#contents div:not([id="tab1"])').hide();
    $("main a").click(function () {
        $("#contents div").hide();
        $($(this).attr("href")).show();
        $(".current").removeClass("current");
        $(this).addClass("current");
        return false;
    });

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 500) {
            $(".top").fadeIn()
        } else {
            $(".top").fadeOut()
        };
    });

    $(".top").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 500);
    });

    /*================================================
                いいね！ボタン
    ==================================================*/
    $(".goodBtn").click(function () {
        $(this).hide();
        $(this).siblings(".goodBtnAfter").show();
    });

    $(".goodBtnAfter").click(function () {
        $(this).hide();
        $(this).siblings(".goodBtn").show();
    });

    /*================================================
                sp用フッターナビ表示・非表示
    ==================================================*/



    var width = $(window).outerWidth();
    if (width <= 768) {
        $(".fnavItem:nth-of-type(2) li:first-of-type").click(function () {
            $(this).siblings("li").stop().slideToggle();
            return false;
        });

        $(".fa-bars").click(function () {
            $(this).siblings("ul").children("li:nth-of-type(n+2)").stop().slideToggle();
        });



        $(".fnavItem:nth-of-type(3) li:first-of-type").click(function () {
            $(this).siblings("li").stop().slideToggle();
            return false;
        });
    }

    /*================================================
                  sp用ヘッダー、検索ボックス
      ==================================================*/
    $(".searchButton").click(function () {
        $(this).fadeOut();
        $(".closeButton").fadeIn();
        $(".searchArea").fadeIn();
    });

    $(".closeButton").click(function () {
        $(this).fadeOut();
        $(".searchButton").fadeIn();
        $(".searchArea").fadeOut();
    });

});
