//script pour récupérer l'adresse mail dans le footer

$(document).ready(function () {
    $("#footerForm").submit(function(event) {  
        event.preventDefault();

        $('#error2').addClass().css('display','none');
        
        var formData = {
            email: $("#footerEmail").val(),
            token: $('input[name="_token"]').val(),
        };
        console.log(formData);
        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:8000/getmail",
            data: formData,
            dataType: "json",
            encode: true,
        })
        .done(function() {
            console.log('ok');
            $('.titre').addClass().css('display','none');
            $('.texte').addClass().css('display','none');
            $('.titre2').addClass().css('display','block');
            $('.texte2').addClass().css('display','block');
        })
        .fail(function() {
            $('#error2').addClass().css('display','block');
            console.log('fail');
        });
    });
});