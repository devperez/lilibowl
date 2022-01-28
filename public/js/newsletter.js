//Script général pour la récupération des adresses mails
//le token csrf est désactivé pour la route getmail

//Affichage de la pop up au bout de 5 secondes
$(function(){
    setTimeout(function(){
    $('#myModal').modal('show');
    },5000);
})


// Récupération du mail s'il est donné dans le footer
$(function () {
    $("#footerForm").on("submit",function(event) {  
        event.preventDefault();

        $('#error2').addClass().css('display','none');
        
        var formData = {
            email: $("#footerEmail").val(),
        };
        // console.log(formData);
        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:8000/getmail",
            data: formData,
            dataType: "json",
            encode: true,
        })
        .done(function() {
            // console.log('ok');
            $('.titre').addClass().css('display','none');
            $('.texte').addClass().css('display','none');
            $('.titre2').addClass().css('display','block');
            $('.texte2').addClass().css('display','block');
            $('#footerForm').addClass().css('display','none');
        })
        .fail(function() {
            $('#error2').addClass().css('display','block');
            // console.log('fail');
        });
    });

    //Récupération du mail s'il est donné dans la pop up
    $("#form").on("submit",function(event) {  
        event.preventDefault();

        $('#error').addClass().css('display','none');

        var formData = {
            email: $("#email").val(),
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
        // console.log('done');
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
        // console.log('undone');
        });
    });
});