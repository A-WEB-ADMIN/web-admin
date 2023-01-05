$(function(){


    $(".btn_layer_open").click(function(){
        var $thisId = $(this)[0].className.split(" ")[0];
        $("#"+$thisId).css({ zIndex : 1000 });
        $("#"+$thisId).addClass("active_pop");
        $("#"+$thisId).animate({ opacity : 1 } , { duration : 500 });

        if( $(".active_pop").length > 1 ){
            $("#"+$thisId).find(".dim").hide();
        }

    })

    $(".ok").click(function(){
        $(this).closest(".pop").removeClass("active_pop");
        $(this).closest(".pop").animate({ opacity : 0 } , { duration : 500 , complete : function(){
                $(this).css({zIndex : -1})
            }})
    })

    $(".pop .no").click(function(){
        $(this).closest(".pop").removeClass("active_pop");
        $(this).closest(".pop").animate({ opacity : 0 } , { duration : 500 , complete : function(){
                $(this).css({zIndex : -1})
            }})
    })

    $(".setting > div > ul > li label input").click(function(){
        if( $(this).prop("checked") ){
            $(this).closest("label").next().slideDown();
        }else{
            $(this).closest("label").next().slideUp();
        }
    })

    $(".setting > div > ul > li").each(function(i){
        if( $(".setting > div > ul > li").eq(i).find("label input").prop("checked") ){
            $(".setting > div > ul > li").eq(i).find("label input").closest("label").next().slideDown();
        }else{
            $(".setting > div > ul > li").eq(i).find("label input").closest("label").next().slideUp();
        }
    })

    $(".technology_box .left_tree li > strong").click(function(){
        if( $(this).next().length > 0 ){
            $(this).next().slideToggle();
            $(this).toggleClass("on");
        }else{

        }
    })







});