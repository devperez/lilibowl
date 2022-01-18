@extends('layouts.home')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Liste des mails enregistrés</h2>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success" id="msg">
    <p>{{ $message }}</p>
</div>
@endif

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-bordered">
                    <tr>
                        <th>Email</th>
                        <th>Date d'ajout</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($mails as $mail)
                    <tr>
                        <td>{{ $mail->email }}</td>
                        <td>{{ \Carbon\Carbon::parse($mail->created_at)->format('d-m-Y à H:i:s') }}</td>
                        <td>
                            <form action="{{ route('destroymail', $mail->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

{{ $mails->links() }}
            </div>
            <div class="col-lg-4">
                <h2>Exporter</h2>
                <p>Créer un fichier .csv avec tous les mails</p>
                <form style="margin-bottom:15px" method="POST" action="{{ route('export') }}" >
                    @csrf
                    <input type="text" name="name" placeholder="Donner un nom au fichier" >
                    <button class="btn-primary" type="submit" >Exporter</button>
                </form>
                <h2>Rechercher un mail</h2>
                <div class="searchform">
                    <form action="{{ route('searchmail') }}" method="GET">
                        <input class="searchbar" name="email" placeholder="Rechercher un mail" />
                        <button class="btn-primary">Chercher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    

<script>
$(document).ready(function (){
        setTimeout(function(){
            $("#msg").fadeOut(5000);
        })
    })
    


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
