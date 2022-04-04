//Affichage des aperçus à l'upload du menu
//Le token csrf est désactivé pour le chemin /menu, voir middleware verifyCsrfToken

$('.prev').addClass().css('opacity', '0'); //empêche l'affichage d'image cassée par défaut

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            $('.prev').addClass().css('opacity', '1');

            reader.onload = function (e) {
                $('.prev').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $(".fileInput").on("change",function(){
        readURL(this);
    });


//Traitement des formulaires lors du submit
//menu principal
$(function(){
    $('#form1').on("submit",function(e) {
        e.preventDefault();

        var formData = {
            menu1: $("#menuForm1").val(),
            "_token" : $("#tokenForm1").val(),
        };
        console.log(formData);
        $.ajax({
            type:"POST",
            url: "http://127.0.0.1:8000/menu",
            data: formData,
            processData: false,
            contentType: false,
            cache:false,
            dataType: 'json',
        })
        .done(function(data){
            //console.log(data);
            $('.prev').attr('src','');
            $('.fileInput').val('');
            $('#success').addClass().css('display', 'block');
            $('#success').fadeOut(4000);
            $('.prev').addClass().css('opacity', '0'); //empêche l'affichage d'image cassée par défaut
        })
        .fail(function(data){
            //console.log(data);
            $('#fail').addClass().css('display', 'block');
            $('#fail').fadeOut(5000);
            $('.prev').addClass().css('opacity', '0'); //empêche l'affichage d'image cassée par défaut
            $('.fileInput').val('');
        });
    });
});

//menu des desserts et des boissons

$(function(){
    $('#form2').on("submit",function(e) {
        e.preventDefault();

        var formData = {
            menu2: $("#menuForm2").val(),
            "_token" : $("#tokenForm2").val(),
        };

        $.ajax({
            type:"POST",
            url: "http://127.0.0.1:8000/menu",
            data: formData,
            processData: false,
            contentType: false,
            cache:false,
            dataType: 'json',
        })
        .done(function(data){
            //console.log(data);
            $('.prev').attr('src','');
            $('.fileInput').val('');
            $('#success2').addClass().css('display', 'block');
            $('#success2').fadeOut(4000);
            $('.prev').addClass().css('opacity', '0'); //empêche l'affichage d'image cassée par défaut
        })
        .fail(function(data){
            //console.log(data);
            $('#fail2').addClass().css('display', 'block');
            $('#fail2').fadeOut(5000);
            $('.prev').addClass().css('opacity', '0'); //empêche l'affichage d'image cassée par défaut
            $('.fileInput').val('');
        });
    });
});

//menu des boissons

// $(function(){
//     $('#form3').on("submit",function(e) {
//         e.preventDefault();

//         $.ajax({
//             type:"POST",
//             url: "http://127.0.0.1:8000/menu",
//             data: new FormData(this),
//             processData: false,
//             contentType: false,
//             dataType: 'json',
//         })
//         .done(function(data){
//             //console.log(data);
//             $('.prev').attr('src','');
//             $('.fileInput').val('');
//             $('#success3').addClass().css('display', 'block');
//             $('#success3').fadeOut(4000);
//             $('.prev').addClass().css('opacity', '0'); //empêche l'affichage d'image cassée par défaut
//         })
//         .fail(function(data){
//             //console.log(data);
//             $('#fail3').addClass().css('display', 'block');
//             $('#fail3').fadeOut(5000);
//             $('.prev').addClass().css('opacity', '0'); //empêche l'affichage d'image cassée par défaut
//             $('.fileInput').val('');
//         });
//     });
// });