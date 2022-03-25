@extends('Admin/layouts/home')
@section('content')
<br><br><br>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestion des étudiants </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
           <a href="{{route('etudiant.create')}}" type="button" class="btn btn-sm btn-outline-secondary">
               <span data-feather="calendar"></span>
                Inscription
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
                <th>ID</th>
                <th>Crée le</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Filière</th>
                <th>Niveau</th>
                <th>Date de naissance</th>
                <th>Sexe</th>
                <th>Nationalité</th>
                <th>Télephone</th>
                <th>Adresse mail</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tbody>
            @foreach($students as $etud)
                <tr>
                    <th>{{ $etud->id }}</th>
                    
                    <td>
                        {{ $etud->created_at }}<br/>
                        <small class="text-xs">{{ $etud->updated_at }}</small>
                    </td>
                    <td>{{ $etud->nom }}</td>
                    <td>{{ $etud->prenom }}</td>
                    <td>{{ $etud->filiere }}</td>
                    <td>{{ $etud->niveau }}</td>
                    <td>{{ $etud->date_naissance }}</td>
                    <td>{{ $etud->sexe }}</td>
                    <td>{{ $etud->nationalite }}</td>
                    <td>{{ $etud->telephone }}</td>
                    <td>{{ $etud->mail }}</td>
                    <td>
                        <a href="{{ route('etudiant.edit', $etud->matricule) }}" class="btn btn-sm btn-primary">Editer</a>
                        @if($etud->deleted_at)
                            <form class="d-inline form-item-force-delete" method="post" action="{{ route('etudiant.force-destroy', $etud->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark btn-sm">Supprimer définitivement</button>
                            </form>
                            <form class="d-inline" method="post" action="{{ route('etudiant.restore', $etud->id) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">Restaurer</button>
                            </form>
                        @else
                            <form class="d-inline form-item-delete" method="post" action="{{ route('etudiant.destroy', $etud->id) }}">
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

