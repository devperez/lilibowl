@extends('layouts.home')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
        <h2 class="formlabel">Gestion des menus</h2>
        </div>
    </div>
</div>

<div class="wrapper_form" style="display:block" id="menu1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="margin-bottom:80px; display:flex; flex-direction:row; justify-content:center;">
                <!-- <p>Vous souhaitez mettre à jour un autre menu :</p> -->
                <button style="margin-right:20px;" class="btn2 btn bg-yellow">Le menu des desserts</button>
                <button class="btn3 btn bg-yellow">Le menu des boissons</button>
            </div>
        </div>
        <div id="success" class="alert alert-success msg">
    <p>La mise à jour a bien été effectuée.</p>
</div>
<div id="fail" class="alert alert-danger msg">
    <p>Merci de bien vouloir choisir un fichier image compatible.</p>
</div>
        <div class="row">
            <div class="col-lg-12">
                <form class="menuform" id="form1" action="{{ route('maj') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <label class="formlabel">Mise à jour du menu principal</label>
                    <input form="form1" class="btn bg-lime submit" type="submit" value="Mettre à jour"/>
                    <input type="file" class="fileInput btn-secondary" name="menu1"/>
                    <img class="prev" src="" id="menu" alt="">
                </form>
            </div>
            <!-- <div class="col-lg-6 right">
                <input form="form1" class="btn bg-lime submit" type="submit" value="Mettre à jour"/>
                <div>
                    <div>    
                        <p>Vous souhaitez mettre à jour :</p>
                        <button class="btn2 btn bg-yellow">Le menu des desserts</button>
                        <button class="btn3 btn bg-yellow">Le menu des boissons</button>
                    </div>
                </div> -->
            </div> -->
        </div>
    </div>
</div>


<div style="display:none" id="menu2">
    <div class="container">
        <form class="menuform" id="form2" action="{{ route('maj') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <label class="formlabel">Mise à jour du menu des desserts</label>
                <input type="file" class="fileInput btn-secondary" name="menu2"/>
                <iframe class="prev"></iframe>
                <input class="btn bg-lime submit" type="submit" id="btn2" value="Mettre à jour"/>
        </form>
    </div>
    <hr>
    <div style="display:flex; flex-direction:column; text-align:center;">
        <div>    
            <p>Vous souhaitez mettre à jour :</p>
            <button class="btn1 btn btn bg-yellow">Le menu principal</button>
            <button class="btn3 btn btn bg-yellow">Le menu des boissons</button>
        </div>
    </div>
</div>

<div style="display:none" id="menu3">
    <div class="container">
        <form class="menuform" id="form3" action="{{ route('maj') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <label class="formlabel">Mise à jour du menu des boissons</label>
                <input type="file" class="fileInput btn-secondary" name="menu3"/>
                <iframe class="prev"></iframe>
                <input class="btn bg-lime submit" type="submit" value="Mettre à jour"/>
        </form>
    </div>
    <hr>
    <div style="display:flex; flex-direction:column; text-align:center;">
        <div>    
            <p>Vous souhaitez mettre à jour :</p>
            <button class="btn1 btn btn bg-yellow">Le menu principal</button>
            <button class="btn2 btn btn bg-yellow">Le menu des desserts</button>
        </div>
    </div>  
</div>

<script>
//logique des boutons
$(document).ready(function(){
    $('.btn2').click(function(e){
        e.preventDefault();
        $('.prev').attr('src','');
        $('#menu1').addClass().css('display','none');
        $('#menu2').addClass().css('display','block');
        $('#menu3').addClass().css('display','none');
    });
    $('.btn3').click(function(e){
        e.preventDefault();
        $('.prev').attr('src','');
        $('#menu1').addClass().css('display','none');
        $('#menu2').addClass().css('display','none');
        $('#menu3').addClass().css('display','block');
    });
    $('.btn1').click(function(){
        $('.prev').attr('src','');
        $('#menu1').addClass().css('display','block');
        $('#menu2').addClass().css('display','none');
        $('#menu3').addClass().css('display','none');
    });
});

//validation des fichiers
$(document).ready(function (){
    "use strict";
    $('#form1').validate({
        menu1: {
            required:true,
            extension:"jpg,jpeg,png",
        }
    });
});

//Affichage des aperçus à l'upload du menu
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
    
    $(".fileInput").change(function(){
        readURL(this);
    });


//Traitement des formulaires lors du submit
//menu principal
$(document).ready(function(){
    $('#form1').submit(function(e) {
        e.preventDefault();

    $.ajax({
        type:"POST",
        url: '{{ route('maj') }}',
        data: new FormData(this),
        processData: false,
        contentType: false,
    })
    .done(function(){
        console.log('ok');
        $('.prev').attr('src','');
        $('.fileInput').val('');
        $('#success').addClass().css('display', 'block');
        $('#success').fadeOut(4000);
        $('.prev').addClass().css('opacity', '0'); //empêche l'affichage d'image cassée par défaut

    })
    .fail(function(){
        console.log('fail');
        $('#fail').addClass().css('display', 'block');
        $('#fail').fadeOut(5000);
    });
});
});

//menu des desserts

$(document).ready(function(){
    $('#form2').submit(function(e) {
        e.preventDefault();

    $.ajax({
        type:"POST",
        url: '{{ route('maj') }}',
        data: new FormData(this),
        processData: false,
        contentType: false,
    })
    .done(function(){
        console.log('ok');
        $('.prev').attr('src','');
        $('.fileInput').val('');
        $('#success').addClass().css('display', 'block');
        $('#success').fadeOut(4000);
        $('.prev').addClass().css('opacity', '0'); //empêche l'affichage d'image cassée par défaut
    })
    .fail(function(){
        console.log('fail');
        $('#fail').addClass().css('display', 'block');
        $('#fail').fadeOut(5000);
    });
});
});

//menu des boissons

$(document).ready(function(){
    $('#form3').submit(function(e) {
        e.preventDefault();

    $.ajax({
        type:"POST",
        url: '{{ route('maj') }}',
        data: new FormData(this),
        processData: false,
        contentType: false,
    })
    .done(function(){
        console.log('ok');
        $('.prev').attr('src','');
        $('.fileInput').val('');
        $('#success').addClass().css('display', 'block');
        $('#success').fadeOut(4000);
        $('.prev').addClass().css('opacity', '0'); //empêche l'affichage d'image cassée par défaut
    })
    .fail(function(){
        console.log('fail');
        $('#fail').addClass().css('display', 'block');
        $('#fail').fadeOut(5000);
    });
});
});

// autologout.js

$(document).ready(function () {
    const timeout = 900000;  // 900000 ms = 15 minutes
    var idleTimer = null;
    $('*').bind('mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick', function () {
        clearTimeout(idleTimer);

        idleTimer = setTimeout(function () {
            document.getElementById('form_id').submit();
        }, timeout);
    });
    $("body").trigger("mousemove");
});

</script>
@endsection