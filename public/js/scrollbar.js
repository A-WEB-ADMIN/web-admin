$(function(){


    $(".open_close").click(function(){
        if( !$(".left_dim").is(":animated") )
        {
            if( !$(this).hasClass("on") )
            {
                $(this).addClass("on");
                $(".right_cont, .l-sidebar").addClass("active");
                $(".left_dim").css({zIndex : 4}).animate({ opacity: 1 } , { duration : 600 });
                leftDimE();
            }
            else
            {
                $(this).removeClass("on");
                $(".right_cont, .l-sidebar").removeClass("active")
                $(".left_top .menu_box .depth_1 .depth_2").hide();
                $(".left_top .menu_box .depth_1 > li > a").removeClass("on");
                $(".left_dim").animate({ opacity: 0 } , { duration : 600 , complete : function(){
                        $(this).css({zIndex: -9})
                    } });
            }
        }
    })

    function leftDimE(){
        $(".left_dim").click(function(){
            if( !$(".left_dim").is(":animated") ){
                $(".open_close").trigger("click");
            }
        })
    }








    $(".menu_box .depth_1 > li > a").click(function(){
        if( $(this).next().length > 0 ){
            if( $(".l-sidebar").hasClass("active") ){

                if( !$(this).hasClass("on") ){
                    $(".menu_box .depth_1 .depth_2").slideUp();
                    $(".menu_box .depth_1 > li a").removeClass("on");
                    $(this).addClass("on");
                    $(this).next().slideDown();
                }else{
                    $(this).removeClass("on");
                    $(this).next().slideUp();
                }
            }
        }
    })






});