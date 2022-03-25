@extends('./authindex')
@section('content')
 <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5"  data-aos="fade" >

            <h2 class="mb-5 text-black">Votre espace de connexion</h2>

            <form action="{{ route('auth.check')}}" method="POST" class="p-5 bg-white">
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
             
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="text"  name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Entrer votre email">
                  @error('email')
                    <div  class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="password">Password</label> 
                  <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Entrer votre mot de passe">
                  @error('password')
                    <div  class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Login" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          
        </div>
      </div>
    </div>

    @endsection