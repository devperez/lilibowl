@extends('layouts.home')
@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
          <h5 class="m-0">Derniers mails enregistrés</h5>
          <table class="table table-bordered">
    <tr>
        <th>Email</th>
        <th width="200px">Date d'ajout</th>
    </tr>
    @foreach ($emails as $email)
    <tr>
        <td>{{ $email }}</td>
        <td>{{ \Carbon\Carbon::parse($email->created_at)->format('d-m-Y à H:i:s') }}</td>
    </tr>
    @endforeach


        </div>

          <!-- /.col-md-6 -->
    </div>
        <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

@endsection
