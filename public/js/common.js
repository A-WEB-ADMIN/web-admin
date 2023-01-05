$(function(){







  /* file */
  var fileTarget = $('.filebox .upload-hidden');
  fileTarget.on('change', function(){
      if(window.FileReader){
          var filename = $(this)[0].files[0].name;
      } else {
          var filename = $(this).val().split('/').pop().split('\\').pop();
      }
      $(this).siblings('.upload-name').val(filename);
  });

  $(".fillter .list_way > div p").click(function(){
    $(".fillter .list_way > div p").removeClass("on");
    $(this).addClass("on")
  })

  $(".fillter > button").click(function(e){
    $(".fillter .inner").hide();
    if( !$(this).closest(".fillter").hasClass("on") ){
      $(".fillter").removeClass("on");
      $(this).closest(".fillter").addClass("on");
      leaveE();
    }else{
      $(this).closest(".fillter").removeClass("on")
    }
    e.stoppropagation();
  })

  function leaveE(){
    $(".fillter.on .inner").mouseleave(function(){
      $(".fillter.on > button").trigger("click");
    })
  }

  $(".btn_toggle").click(function(){
    $(".toggle_layer").slideUp();
    if( !$(this).hasClass("active") ){
      $(this).next(".toggle_layer").slideDown();
      $(".btn_toggle").removeClass("active");
      $(this).addClass("active");
    }else{
      $(".btn_toggle").removeClass("active");
      $(".toggle_layer").slideUp();
    }
  })

  $(".toggleButton").click(function(){
    $(".toggleBox").slideToggle();
  })

  $(".bell .bell_message .list ul li button").click(function(){
    $(this).closest("li").remove();
    if( $(".bell .bell_message .list ul li").length == 0 ){
      $(".bell .bell_message .list").hide();
      $(".empty").show()
    }
  })

  $(".left_info .new_message").click(function(){
    $(".top_area .choice_to").show();
    $(".top_area .titles").hide();
  })

  $(".pop .enterprise_list ul li").click(function(){
    $(".pop .enterprise_list ul li").removeClass("on");
    $(this).addClass("on");
  })

  $(".open_hidden").click(function(){
    $(".info_change .left .hidden_input").show();
    $(this).hide();
    $(this).closest("dt").hide().next().hide();
  })




  $(".pop").each(function(i){
    $(".pop").eq(i).find(".tab_area.tab_event li").click(function(){
      var idx = $(this).index();
      $(".pop").eq(i).find(".tab_area.tab_event li").removeClass("on").eq(idx).addClass("on");
      $(".pop").eq(i).find(".tab_box.tab_event").hide().eq(idx).show();
    })
  })

  $(".ui-state-default button").click(function(){
    $(this).closest(".ui-state-default").remove();
  })

  $("#pop_view .in .contents").click(function(){
    $(this).toggleClass("on");
  })

  $(".left_info .tab_area ul li").click(function(){
    var idx = $(this).index();
    $(".left_info .tab_area ul li").removeClass("on").eq(idx).addClass("on");
    $(".left_info .tab_box > div").removeClass("on").eq(idx).addClass("on");
  })

  $(".plan .layer .top a.close").click(function(){
    $(this).closest(".plan .layer").hide();
  })

  $(".plan button").click(function(){
    $(".plan .layer").hide();
    $(this).next().show();
  })

  $(".depth_1").each(function(i){
    $(".depth_1").eq(i).find(">li").each(function(k){
      if( $(".depth_1").eq(i).find(">li").eq(k).find(".depth_2").length == 0 ){
        $(".depth_1").eq(i).find(">li").eq(k).addClass("none_sub")
      }
    })
  })

  $(".faq .title_tr td").click(function(){

    if( $(this).closest(".title_tr").next(".contents_tr").length > 0 ){
      $(this).closest(".title_tr").toggleClass("on").next(".contents_tr").toggleClass("on");
    }
  })

  $(".select_chk").on("change",function(){
    $(this).removeClass();
    if( $(this).val() == "양호" || $(this).val() == "N/A" ){
      $(this).addClass("w_100 select_chk style1")
    }else if( $(this).val() == "취약" ){
      $(this).addClass("w_100 select_chk style2")
    }else if( $(this).val() == "수동" ){
      $(this).addClass("w_100 select_chk style3")
    }
  })
})
