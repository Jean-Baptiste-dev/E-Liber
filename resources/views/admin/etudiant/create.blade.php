@extends('Admin/layouts/home')
@section('content')
<br><br><br><br><br><br><br><br><br><br>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <br><br><br>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Inscrire un étudiant</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="{{route('liste_etudiant')}}" type="button" class="btn btn-sm btn-outline-secondary">Les étudiant</a>
                </div>


            </div>
        </div>
        <form method="post" action="{{route('etudiant.store')}}" enctype="multipart/form-data">
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
               </div>
               <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="filiere_name">Filière</label>
                        <select class="form-control form-control-lg @error('filiere_name') is-invalid @enderror" id="filiere_name" name="filiere_name">
                        @foreach($filieres as $fil)
                            <option value="{{ $fil->id }}" @if($fil->id == old('filiere_id')) selected="selected" @endif>{{$fil->name}}</option>
                            @endforeach
                            </select>
                            @error('filiere_name')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>

              
                
                    <div class="form-group col-md-6">
                        <label for="niveau_name">Le niveau d'étude</label>
                        <select class="form-control form-control-lg @error('niveau_name') is-invalid @enderror" id="niveau_name" name="niveau_name">
                        @foreach($niveaux as $niv)
                            <option value="{{ $niv->id }}" @if($niv->id == old('niveau_id')) selected="selected" @endif>{{$niv->name}}</option>
                            @endforeach
                            </select>
                            @error('niveau_name')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>

                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                      <label for="tel">Date de naissance</label>
                       <input type="text" class="form-control @error('date_naissance') is-invalid @enderror" value="{{old('date_naissance')}}" id="date_naissance" name="date_naissance" >
                         @error('date_naissance')
                 <div  class="invalid-feedback">{{$message}}</div>
                             @enderror
               </div>

               <div class="form-group col-md-6">
                      <label for="tel">Sexe</label>
                       <input type="text" class="form-control @error('sexe') is-invalid @enderror" value="{{old('sexe')}}" id="sexe" name="sexe" >
                         @error('sexe')
                 <div  class="invalid-feedback">{{$message}}</div>
                             @enderror
               </div>
               </div>
               <div class="form-row">
               <div class="form-group col-md-6">
                      <label for="tel">Nationalité</label>
                       <input type="text" class="form-control @error('nationalité') is-invalid @enderror" value="{{old('nationalité')}}" id="nationalité" name="nationalité" >
                         @error('nationalité')
                 <div  class="invalid-feedback">{{$message}}</div>
                             @enderror
               </div>

               <div class="form-group col-md-6">
                      <label for="tel">Telephone</label>
                       <input type="text" class="form-control @error('tel') is-invalid @enderror" value="{{old('tel')}}" id="tel" name="tel" >
                         @error('tel')
                 <div  class="invalid-feedback">{{$message}}</div>
                             @enderror
               </div>
          </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="mail">E-mail</label>
                    <input type="text" class="form-control @error('mail') is-invalid @enderror" value="{{old('mail')}}" id="mail" name="mail" >
                    @error('mail')
                    <div  class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

            </div>
          
            <button type="submit" class="btn btn-primary">Valider</button>
            <a class="btn btn-secondary" href="{{ route('liste_etudiant') }}">Annuler</a>
        </form>
    </main>
    </div>
    </div>
@endsection
