@extends('Admin/layouts/home')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<br><br><br><br>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestion des Filières</h1>

        <div class="btn-toolbar mb-2 mb-md-0">

            <a href="{{route('filiere.create')}}" class="btn btn-sm btn-outline-secondary">
                <span data-feather="calendar"></span>
                Nouveau
            </a>
        </div>
    </div>
    @if(session()->has('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif

    <div class="table-responsive">
       
        <table class="table table-sm">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Crée le </th>
                <th>Nom de la filière</th>
                <th>En ligne</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($filieres as $filiere)
                <tr>
                    <th>{{ $filiere->id }}</th>
                    <td>
                        {{ $filiere->created_at }}<br/>
                        <small class="text-xs">{{ $filiere->updated_at }}</small>
                    </td>
                    <td>{{ $filiere->name }}</td>
                    <td>{{ $filiere->online }}</td>
                    <td>
                        <a href="{{ route('filiere.edit', $filiere->id) }}" class="btn btn-sm btn-primary">Editer</a>
                        @if($filiere->deleted_at)
                            <form class="d-inline form-item-force-delete" method="post" action="{{ route('filiere.force-destroy', $filiere->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark btn-sm">Supprimer définitivement</button>
                            </form>
                            <form class="d-inline" method="post" action="{{ route('filiere.restore', $filiere->id) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">Restaurer</button>
                            </form>
                        @else
                            <form class="d-inline form-item-delete" method="post" action="{{ route('filiere.destroy', $filiere->id) }}">
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
