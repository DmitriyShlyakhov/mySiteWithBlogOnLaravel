$(document).ready(function() {
  
  $("#portfolio_grid").mixItUp();
  
  $(".s_portfolio li").click(function() {
    $(".s_portfolio li").removeClass("active");
    $(this).addClass("active");
  });
  
  $(".popup").magnificPopup({type:"image"});
  $(".popup_content").magnificPopup({
    type:"inline",
    midClick: true
  });
  
  
  $(".top_text h1").animated("fadeInDown", "fadeInOut");
  $(".top_text p").animated("fadeInUp", "fadeInDown");
  
  $(".section_header").animated("fadeInUp", "fadeOutDown");
  
  $(".animation_1").animated("flipInY", "fadeOutDown");
  $(".animation_2").animated("fadeInLeft", "fadeOutDown");
  $(".animation_3").animated("fadeInRight", "fadeOutDown");
  
  $(".left .resume_item").animated("fadeInLeft", "fadeOutDown");
  $(".right .resume_item").animated("fadeInRight", "fadeOutDown");
  
  function heightDetect() {
    $(".main_head").css("height", $(window).height());
  };
  heightDetect();
  $(window).resize(function() {
    heightDetect();
  });
  
  $(".toggle_mnu").click(function() {
    $(".sandwich").toggleClass("active");
  });
  
  $(".top_mnu a").click(function() {
    $(".top_mnu").fadeOut(600);
    $(".sandwich").toggleClass("active");
  }).append("<span>");
  
  $(".top_mnu li").click(function() {
    $(".top_text").removeClass("h_opacity");
  });
  
  $(".toggle_mnu").click(function () {
    if ($(".top_mnu").is(":visible")) {
      $(".top_text").removeClass("h_opacity");
      $(".top_mnu").fadeOut(600);
      $(".top_mnu a").removeClass("fadeInUp animated");
    } else {
      $(".top_text").addClass("h_opacity");
      $(".top_mnu").fadeIn(600);
      $(".top_mnu li a").addClass("fadeInUp animated");
    };
  });
  
  $(".portfolio_item").each(function(i) {
    $(this).find("a.popup_content").attr("href", "#work_" + i);
    $(this).find(".port_descr").attr("id", "work_" + i);
  });
  
  $("input,select,textarea").jqBootstrapValidation();
  
  $(".top_mnu ul a").mPageScroll2id();
  
});
$(window).load(function() { 
  $(".loader_inner").fadeOut(); 
  $(".loader").delay(400).fadeOut("slow"); 
});