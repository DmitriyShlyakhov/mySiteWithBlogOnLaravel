var time = 10, cc = 1;
$(window).scroll(function() {
    $('#counter').each(function(){
        var
        cPos = $(this).offset().top,
        topWindow = $(window).scrollTop();
        if (cPos < topWindow + 600) {
            if (cc < 2) {
              $('.numbers').addClass('viz');
              $('div').each(function(){
                var 
                i = 1,
                num = $(this).data('num'),
                step = 1000 * time / num,
                that = $(this),
                int = setInterval(function(){
                  if (i <= num) {
                    that.html(i);
                  }
                  else {
                    cc += 2; 
                    clearInterval(int);
                  }
                  i++;
                },step);
              });
            }
        }
    });
});