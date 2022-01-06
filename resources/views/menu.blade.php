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

<div class="container-fluid" style="display:flex; justify-content:center;">
    <div>
        <form id="form1" action="" style="display:flex; flex-direction:column">
            <label>Mise à jour du menu principal</label>
            <input type="file" id="fileInput"/>
            <iframe id="prev" style="width:200%; height:400px"></iframe>
            <button style="width:180px">Mettre à jour</button>
        </form>
    </div>
</div>
<hr>
<div style="display:flex; flex-direction:column; text-align:center;">
    <div>    
        <p>Souhaitez-vous mettre à jour :</p>
        <button style="width:180px">Le menu des desserts</button>
        <button style="width:180px">Le menu des boissons</button>
    </div>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#prev').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#fileInput").change(function(){
        readURL(this);
    });

    
</script>
@endsection