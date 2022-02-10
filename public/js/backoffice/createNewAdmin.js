    $(function(){
        $("#form").on('submit',function(event) {  
            event.preventDefault();

            var formData = {
                name: $("#name").val(),
                email: $("#email").val(),
                password: $("#password").val(),
                _token: $('input[name="_token"]').val(),
                };
            
            $.ajax({
                type:"POST",
                url: 'http://127.0.0.1:8000/createnewadmin',
                data: formData,
                dataType:"json",
                encode: true,
            })
            .done(function() {
                $('#success').addClass().css('display','block');
                $('#success').fadeOut(4000);
                $("#name").val('');
                $("#email").val('');
                $("#password").val('');
            })
            .fail(function() {
                console.log('fail');
                $('#fail').addClass().css('display','block');
                $('#fail').fadeOut(20000);
            });
        });
    });