@extends('Admin/layouts/home')
@section('content')
<br><br><br><br><br><br><br><br><br><br>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <br><br><br>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Creation de compte administratif</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Liste Compte administratif</a>
                </div>


            </div>
        </div>
        <form action="{{ route('auth.create')}}" method="POST">
            @csrf

            <div class="results">
            @if(Session::get('success'))
              <div class="alert alert-success">
              {{Session::get('success')}}
              </div>
              @endif

              @if(Session::get('Echec'))
              <div class="alert alert-danger">
              {{Session::get('Echec')}}
              </div>
              @endif

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">

                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror " value="{{old('username')}}" id="username" name="username" >
                    @error('username')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>        
              
                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" name="email" >
                    @error('email')
                    <div  class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" id="password" name="password" >
                    @error('password')
                    <div  class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

            </div>
          

            <button type="submit" class="btn btn-primary">Valider</button>
            <a class="btn btn-secondary" href="#">Annuler</a>
        </form>
    </main>
    </div>
    </div>
@endsection
