$(document).ready(function() {

	$(".h-n-r-top li").click(function() {
		$(".h-n-r-top li").removeClass("active");
		$(this).addClass("active");
	});
  
  $(".s-c-list li").click(function() {
    $(".s-c-list li").removeClass("active");
	$(this).addClass("active");
  });

});