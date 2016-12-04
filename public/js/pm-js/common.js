$(document).ready(function() {

  $(".center li").click(function() {
    $(".center li").removeClass("active");
	$(this).addClass("active");
  });

});