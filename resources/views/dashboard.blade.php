@extends('layouts.home')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="m-0">Mails enregistrés au cours des 31 derniers jours</h5>
        <table class="table table-bordered">
          <tr>
            <th>#</th>
            <th>Email</th>
            <th>Date d'ajout</th>
          </tr>
          @foreach ($data as $item)
            <tr>
              <td id="loop"> {{ $loop->iteration }}</td>
              <td> {{ $item->email }}</td>
              <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y à H:i:s') }}</td>
            </tr>
          @endforeach
        </table>
      </div>
      <div class="col-lg-6">
        <h3>Exporter</h3>
        <p>Exporter la liste des mails en fichier .csv</p>
        <form method="POST" action="{{ route('export') }}" >
        @csrf
          <input type="text" name="name" placeholder="Nom de fichier" >
          <button type="submit" >Exporter</button>
        </form>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</div>

@endsection
