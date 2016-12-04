$(function(){
    $('#submit').click(function(e){
        e.preventDefault();
        $.ajax({
            url: '/',
            method: 'POST',
            dataType: 'html',
            data: {_token: $('#_token').val(),
                name: $('#name').val(),
                message: $('#message').val()},
                success: function(answer)
                { $('#message').html('');
                    $('#message').html(answer);
                    $('#form').trigger('reset');
                }
        });

    });
});