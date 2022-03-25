@extends('Admin/layouts/home')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<br><br><br>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Ajouter une filière</h1>

                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">

                        <a href="{{route('liste_filiere')}}"  class="btn btn-sm btn-outline-secondary">Liste des filières</a>
                    </div>

                </div>
            </div>
            <form method="post" action="{{ route('filiere.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nom de la filière</label>
                        <input type="text" class="form-control  @error('name') is-invalid @enderror " id="name" value="{{old('name')}}" name="name">
                        @error('name')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="online">Filière en ligne</label>
                    <select name="online" id="online" class="form-control @error('online') is-invalid @enderror">
                        <option  value="0">0</option>
                        <option  value="1">1</option>
                    </select>
                        <p> 1 si la filière est d'actualité et 0 si non </p>
                        @error('online')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
                <a class="btn btn-secondary" href="{{ route('liste_filiere') }}">Annuler</a>
            </form>
 </main>
 </div>
</div>

@endsection
