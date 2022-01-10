@extends('layouts.home')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Gestion des menus</h2>
        </div>
    </div>
</div>

<div style="display:block" id="menu1">
    <div class="container-fluid" style="display:flex; justify-content:space-around;">
        <div>
            <form id="form1" action="{{ route('maj') }}" method="POST" style="display:flex; flex-direction:column" enctype="multipart/form-data">
            @csrf
                <label>Mise à jour du menu principal</label>
                <input type="file" class="fileInput" name="menu1"/>
                <iframe class="prev" id="menu" style="width:200%; height:400px"></iframe>
                <input type="submit" style="width:180px" value="Mettre à jour"/>
            </form>
        </div>
        <div>
            <p><strong>Menu affiché actuellement :</strong></p>
                <iframe src=" {{ asset('storage/menus/'.$menu) }} " id="display"></iframe>
        </div>
    </div>
    <hr>
    <div style="display:flex; flex-direction:column; text-align:center;">
        <div>    
            <p>Souhaitez-vous mettre à jour :</p>
            <button class="btn2" style="width:180px">Le menu des desserts</button>
            <button class="btn3" style="width:180px">Le menu des boissons</button>
        </div>
    </div>
</div>
<div style='display:none' id="success">
        <p>La mise à jour a bien été exécutée</p>
    </div>
<div style="display:none" id="menu2">
    <div class="container-fluid" style="display:flex; justify-content:space-around;">
        <div>
            <form id="form2" action="{{ route('maj2') }}" method="POST" style="display:flex; flex-direction:column" enctype="multipart/form-data" enctype="multipart/form-data">
            @csrf
                <label>Mise à jour du menu des desserts</label>
                <input type="file" class="fileInput" name="menu2"/>
                <iframe class="prev" style="width:200%; height:400px"></iframe>
                <button id="btn2" style="width:180px">Mettre à jour</button>
            </form>
        </div>
        <div>
            <p><strong>Menu affiché actuellement :</strong></p>

        </div>
    </div>
    <hr>
    <div style="display:flex; flex-direction:column; text-align:center;">
        <div>    
            <p>Souhaitez-vous mettre à jour :</p>
            <button class="btn1" style="width:180px">Le menu principal</button>
            <button class="btn3"style="width:180px">Le menu des boissons</button>
        </div>
    </div>
</div>
<div style='display:none' class="success">
        <p>La mise à jour a bien été exécutée</p>
    </div>
<div style="display:none" id="menu3">
    <div class="container-fluid" style="display:flex; justify-content:center;">
        <div>
            <form id="form3" action="" style="display:flex; flex-direction:column" enctype="multipart/form-data">
            @csrf
                <label>Mise à jour du menu des boissons</label>
                <input type="file" class="fileInput" name="menu3"/>
                <iframe class="prev" style="width:200%; height:400px"></iframe>
                <button style="width:180px">Mettre à jour</button>
            </form>
        </div>
    </div>
    <hr>
    <div style="display:flex; flex-direction:column; text-align:center;">
        <div>    
            <p>Souhaitez-vous mettre à jour :</p>
            <button class="btn1" style="width:180px">Le menu principal</button>
            <button class="btn2" style="width:180px">Le menu des desserts</button>
        </div>
    </div>
    <div style='display:none' class="success">
        <p>La mise à jour a bien été exécutée</p>
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

//Affichage des aperçus à l'upload du menu

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
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
        $('#success1').addClass().css('display', 'block');
    })
    .fail(function(){
        console.log('fail');
    });
});
});

//mise à jour de la partie "menu affiché actuellement
// $('#document').ready(function(){
//     $('#display').load();
// })

// $(document).ready(function(){
//         $("#form").submit(function(event) {  
//             event.preventDefault();

//             var formData = {
//                 name: $("#name").val(),
//                 email: $("#email").val(),
//                 password: $("#password").val(),
//                 _token: $('input[name="_token"]').val(),
//                 };
            
//             $.ajax({
//                 type:"POST",
//                 url: '{{ route('createnewadmin') }}',
//                 data: formData,
//                 dataType:"json",
//                 encode: true,
//             })
//             .done(function() {
//                 $('#success').addClass().css('display','block');
//             })
//             .fail(function() {
//                 console.log('fail');
//             });
//         });
//     });
</script>
@endsection