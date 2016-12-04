$(document).ready(function() {

  NProgress.start();
  
  $(".menu-top li").click(function() {
    $(".menu-top li").removeClass("active");
    $(this).addClass("active");
  });
  
  $(".c-menu li").click(function() {
    $(".c-menu li").removeClass("active");
    $(this).addClass("active");
  });
  
  $(".c-c-news").not(":first").hide();
  $(".wrapper .tab").click(function() {
      $(".c-content .tab").removeClass("active").eq($(this).index()).addClass("active");
      $(".c-c-news").hide().eq($(this).index()).fadeIn()
  }).eq(0).addClass("active");
  
});
  
$(window).load(function() { 
  
  setTimeout(function() {
            $('.header, .menu').removeClass('out');
            NProgress.set(0.2);
        }, 1000);
        setTimeout(function() {
            $('.content').removeClass('out');
            NProgress.set(0.4);
        }, 2000);
        setTimeout(function() {
            $('.sidebar').removeClass('out');
            NProgress.set(0.6);
        }, 3000);
        setTimeout(function() {
            $('.sidebar-bottom').removeClass('out');
            NProgress.set(0.8);
        }, 4000);
        setTimeout(function() {
            $('.footer-wrapper').removeClass('out');
            $('.loadsite').addClass('dn').removeClass('loadsite');
            NProgress.done();
        }, 5000);
  
});