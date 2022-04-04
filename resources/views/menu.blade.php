@extends('layouts.home')
@section('content')
<!--JQuery-->
<script src="/JQuery/Jquery_min.js"></script>

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
        <h2 class="formlabel">Gestion des menus</h2>
        <p class="attention">Attention, vérifiez bien l'extention de vos fichiers. Seuls les fichiers '.png' sont acceptés.</p>
        </div>
    </div>
</div>

<div class="wrapper_form" style="display:block" id="menu1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 btn_wrapper">
                <button style="margin-right:20px;" class="btn2 btn bg-yellow">Le menu des desserts et des boissons</button>
                <!-- <button class="btn3 btn bg-yellow">Le menu des boissons</button> -->
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
                    <input type="hidden" name="_token" id="tokenForm1" value="{{ csrf_token() }}">
                    <label class="formlabel">Mise à jour du menu principal</label>
                    <input class="btn bg-lime submit" type="submit" value="Mettre à jour"/>
                    <input id="menuForm1" type="file" class="fileInput btn-secondary" name="menu1"/>
                    <img class="prev" src="" alt="">
                </form>
            </div>
        </div>
    </div>
</div>


<div style="display:none" id="menu2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 btn_wrapper">
                <button style="margin-right:20px;" class="btn1 btn btn bg-yellow">Le menu principal</button>
                <!-- <button class="btn3 btn btn bg-yellow">Le menu des desserts et des boissons</button> -->
            </div>
        </div>
        <div id="success2" class="alert alert-success msg">
            <p>La mise à jour a bien été effectuée.</p>
        </div>
        <div id="fail2" class="alert alert-danger msg">
            <p>Merci de bien vouloir choisir un fichier image compatible.</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form class="menuform" id="form2" action="{{ route('maj') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" id="tokenForm2" value="{{ csrf_token() }}">
                    <label class="formlabel">Mise à jour du menu des desserts et des boissons</label>
                    <input class="btn bg-lime submit" type="submit" value="Mettre à jour"/>
                    <input id="menuForm2" type="file" class="fileInput btn-secondary" name="menu2"/>
                    <img class="prev" src="" alt="">
                </form>
            </div>
        </div>
    </div>
</div>
<!--
<div style="display:none" id="menu3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 btn_wrapper">
                <button style="margin-right:20px;" class="btn1 btn btn bg-yellow">Le menu principal</button>
                <button class="btn2 btn btn bg-yellow">Le menu des desserts</button>
            </div>
        </div>
        <div id="success3" class="alert alert-success msg">
            <p>La mise à jour a bien été effectuée.</p>
        </div>
        <div id="fail3" class="alert alert-danger msg">
            <p>Merci de bien vouloir choisir un fichier image compatible.</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form class="menuform" id="form3" action="{{ route('maj') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <label class="formlabel">Mise à jour du menu des boissons</label>
                    <input class="btn bg-lime submit" type="submit" value="Mettre à jour"/>
                    <input type="file" class="fileInput btn-secondary" name="menu3"/>
                    <img class="prev" src="" alt="">
                </form>
            </div>
        </div>
    </div>  
</div>
-->
<script src="js/backoffice/btn.js"></script>
<script src="js/backoffice/submit.js"></script>

@endsection