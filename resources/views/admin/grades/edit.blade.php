@extends('Admin/layouts/home')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Mettre à jour la catégorie</h1>


        </div>
        <form method="post" action="{{ route('categorie.update', $categorie->id) }}">
            @csrf
            @method('put')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nom de la catégorie</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror " id="name" value="{{old('name', $categorie->name)}}" name="name">
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="online">Categorie en Ligne</label>
                    <select name="online" id="online" class="form-control @error('online') is-invalid @enderror">
                        <option  value="0">0</option>
                        <option  value="1">1</option>
                    </select>
                    <p> 1 si la catégorie est online et 0 si Offline </p>
                    @error('online')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Mise a jour</button>
            <a class="btn btn-secondary" href="{{ route('categorie_produits') }}">Annuler</a>
        </form>
    </main>
    </div>
    </div>

@endsection
