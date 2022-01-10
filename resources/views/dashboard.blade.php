@extends('layouts.home')
@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h5 class="m-0">Voir les dernières inscriptions</h5>
          </div>
          <div class="card-body">
            <h5 class="card-title">Écrire un article</h5>

            <p class="card-text">
              Pour écrire un nouvel article, ça se passe ici.
            </p>

            <a href="#" class="btn btn-primary">Écrire</a>
              <!--<a href="#" class="card-link">Another link</a>-->
          </div>
        </div>

        <div class="card card-primary card-outline">
          <div class="card-header">
            <h5 class="m-0">Gérer les menus</h5>
          </div>
          <div class="card-body">
            <h5 class="card-title">Chercher</h5>

            <p class="card-text">
              Pour trouver un post, c'est par ici.
            </p>
            <a href="#" class="btn btn-primary">Rechercher un post</a>
              <!-- <a href="#" class="card-link">Another link</a>-->
          </div>
        </div><!-- /.card -->
      </div>
          <!-- /.col-md-6 -->
      <div class="col-lg-6">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h5 class="m-0">Gérer les administrateurs</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title">Poster un clip vidéo</h6>

            <p class="card-text">Pour poster un clip vidéo, clique sur le bouton.</p>
              <a href="#" class="btn btn-primary">Poster un clip</a>
          </div>
        </div>

        <div class="card card-primary card-outline">
          <div class="card-header">
            <h5 class="m-0">Créer un nouvel administrateur</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title">Poster une image</h6>

            <p class="card-text">Pour poster une illustration, c'est par ici.</p>
              <a href="#" class="btn btn-primary">Poster une image</a>
          </div>
        </div>
      </div>
          <!-- /.col-md-6 -->
    </div>
        <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

@endsection
