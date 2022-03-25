@extends('Admin/layouts/home')
@section('content')
<br><br><br>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestion des professeurs </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
           <a href="{{route('professeur.create')}}" type="button" class="btn btn-sm btn-outline-secondary">
               <span data-feather="calendar"></span>
                Nouveau professeur
           </a>
        </div>
    </div>
    @if(session()->has('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead class="table-dark">
            <tr>
                <th>Matricule</th>
                <th>Crée le </th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Adresse mail</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tbody>
            @foreach($profs as $prof)
                <tr>
                    <th>{{ $prof->matricule }}</th>
                    <td>
                        {{ $prof->created_at }}<br/>
                        <small class="text-xs">{{ $prof->updated_at }}</small>
                    </td>
                    <td>{{ $prof->nom }}</td>
                    <td>{{ $prof->prenom }}</td>
                    <td>{{ $prof->tel }}</td>
                    <td>{{ $prof->adress }}</td>
                    <td>{{ $prof->ville }}</td>
                    <td>{{ $prof->mail }}</td>
                    <td>{{ $prof->photo }}</td>
                    <td>{{ $prof->salaire }}</td>
                    <td>{{ $prof->password }}</td>
                   
                    <td>
                        <a href="{{ route('professeur.edit', $professeur->matricule) }}" class="btn btn-sm btn-primary">Editer</a>
                        @if($prof->deleted_at)
                            <form class="d-inline form-item-force-delete" method="post" action="{{ route('professeur.force-destroy', $prof->matricule) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark btn-sm">Supprimer définitivement</button>
                            </form>
                            <form class="d-inline" method="post" action="{{ route('professeur.restore', $prof->id) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">Restaurer</button>
                            </form>
                        @else
                            <form class="d-inline form-item-delete" method="post" action="{{ route('professeur.destroy', $prof->matricule) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
          
        </table>
    </div>
</main>

@section('js')
    @parent
    <script type="text/javascript">
        $(document).ready(
            function() {
                $('.form-item-force-delete').on('submit', function(event) {
                    if (!confirm('Êtes vous certain ? Action définitive.')) {
                        event.preventDefault();
                    }
                })
            }
        )
    </script>
@endsection

