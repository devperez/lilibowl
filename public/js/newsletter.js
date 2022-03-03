//Script général pour la récupération des adresses mails
//le token csrf est désactivé pour la route getmail

// console.log(screen.width);

// Cookies.remove('pop');
console.log(Cookies.get('pop'));
if (screen.width >= 960) { //pas d'affichage de pop up sur les téléphones portables et les petits écrans
//Affichage de la pop up au bout de 5 secondes
    if(Cookies.get('pop') != 'seen') {
        $(function() {
            setTimeout(function() {
                $('#myModal').modal('show');
            },5000);
        })
        Cookies.set('pop','seen');
    }
}


//Récupération du mail donné dans la pop up
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
        },7000);
    })
    .fail(function() {
        $('#error').addClass().css('display','flex');
        $('.crossErrorWrapper').addClass().css('display','inline');
        $('.label').addClass().css('width', '50%');
        $('.form').addClass().css('align-items', 'center');
        // console.log('undone');
        });
    });
