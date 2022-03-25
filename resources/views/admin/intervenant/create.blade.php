@extends('Admin/layouts/home')
@section('content')
<br><br><br><br><br><br><br><br><br><br>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <br><br><br>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Ajouter un professeur</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="{{route('liste_professeur')}}" type="button" class="btn btn-sm btn-outline-secondary">Les Professeurs</a>
                </div>


            </div>
        </div>
        <form method="post" action="{{route('professeur.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">

                    <label for="name">Nom</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror " value="{{old('name')}}" id="name" name="name" >
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">

                  <label for="firstname">Prenom</label>
                       <input type="text" class="form-control @error('firstname') is-invalid @enderror " value="{{old('firstname')}}" id="firstname" name="firstname" >
                       @error('firstname')
                         <div class="invalid-feedback">{{$message}}</div>
                         @enderror
               </div>

               <div class="form-group col-md-6">
                      <label for="tel">Telephone</label>
                       <input type="text" class="form-control @error('tel') is-invalid @enderror" value="{{old('tel')}}" id="tel" name="tel" >
                         @error('tel')
                 <div  class="invalid-feedback">{{$message}}</div>
                             @enderror
               </div>
            
                    
              
                <div class="form-group col-md-6">
                    <label for="mail">E-mail</label>
                    <input type="text" class="form-control @error('mail') is-invalid @enderror" value="{{old('mail')}}" id="mail" name="mail" >
                    @error('mail')
                    <div  class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

            </div>
          

            <button type="submit" class="btn btn-primary">Valider</button>
            <a class="btn btn-secondary" href="{{ route('liste_professeur') }}">Annuler</a>
        </form>
    </main>
    </div>
    </div>
@endsection
