@extends('layouts.home')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Liste des mails enregistrés</h2>
            <div>
                <form action="{{ route('searchmail') }}" method="GET">
                    <input name="email" placeholder="Rechercher un mail" />
                    <button>Chercher</button>
                </form>
            </div>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success" id="msg">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Email</th>
        <th width="200px">Date d'ajout</th>
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
                <button type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
{{ $mails->links() }}



<script>
$(document).ready(function (){
        setTimeout(function(){
            $("#msg").fadeOut(5000);
        })
    })
    
</script>
@endsection
