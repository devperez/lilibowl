@extends('layouts.home')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<div class="container">
    <div class="row justify-content-center">
        <!-- <h2>Créer un nouvel administrateur</h2> -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>{{ __('Créer un nouvel administrateur') }}</h2>
                </div>

                <div class="card-body">
                    <form id="#form">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adresse e-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="create" type="submit" class="btn btn-primary">
                                    {{ __('Créer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="success" class="alert alert-success" style="display:none">
            <p>Le nouvel administrateur a été créé avec succès !</p>
        </div>
</div>

<script>
    
    $(document).ready(function(){
        $("#form").submit(function(event) {  
            event.preventDefault();

            var formData = {
                name: $("#name").val(),
                email: $("#email").val(),
                password: $("#password").val(),
                _token: $('input[name="_token"]').val(),
                };
            
            $.ajax({
                type:"POST",
                url: '{{ route('createnewadmin') }}',
                data: formData,
                dataType:"json",
                encode: true,
            })
            .done(function() {
                $('#success').addClass().css('display','block');
            })
            .fail(function() {
                console.log('fail');
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
