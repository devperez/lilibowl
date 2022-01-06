@extends('layouts.home')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Liste des administarteurs enregistrés</h2>
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
        <th>Nom</th>
        <th>Email</th>
        <th width="200px">Date d'ajout</th>
        <th>Action</th>
    </tr>
    @foreach ($admins as $admin)
    <tr>
        <td>{{ $admin->name }}</td>
        <td>{{ $admin->email }}</td>
        <td>{{ \Carbon\Carbon::parse($admin->created_at)->format('d-m-Y à H:i:s') }}</td>
        <td>
            <form action="{{ route('admindestroy', $admin->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

<script>
$(document).ready(function (){
        setTimeout(function(){
            $("#msg").fadeOut(5000);
        })
    })
    
</script>
@endsection