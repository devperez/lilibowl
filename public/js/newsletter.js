//Affichage de la modale au bout de 5 secondes

$(document).ready(function(){
    setTimeout(function(){
    $('#myModal').modal('show');
    },5000);
})

//script pour récupérer l'adresse mail dans la pop-up

$(document).ready(function () {
    $("#form").submit(function(event) {  
        event.preventDefault();

        $('#error').addClass().css('display','none');

        var formData = {
            email: $("#email").val(),
            _token: $('input[name="_token"]').val(),
        };

// console.log(formData);
    $.ajax({
        type:"POST",
        url: "http://127.0.0.1:8000/getmail",
        data: formData,
        dataType: "json",
        encode:true,
    })
    .done(function() {
        console.log('done');
        $('#recevez').addClass().css('display','none');
        $('#merci').addClass().css('display','block');
        $('#confirm').addClass().css('display','block');
        $('#inscription').addClass().css('display', 'none');
        $('#form').addClass().css('display', 'none');
        $('.ellipse1').addClass().css('display', 'block');
        $('.ellipse2').addClass().css('display', 'block');

        setTimeout(function(){
            $('#myModal').modal('hide');
        },5000);
    })
    .fail(function() {
        $('#error').addClass().css('display','flex');
        $('.label').addClass().css('width', '50%');
        $('.form').addClass().css('align-items', 'center');
        console.log('undone');
        });
    });
});


