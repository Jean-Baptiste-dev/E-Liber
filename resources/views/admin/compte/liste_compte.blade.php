@extends('Admin/layouts/home')
@section('content')
<br><br><br>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Les comptes administratifs crées </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
           <a href="{{route('auth.create')}}" type="button" class="btn btn-sm btn-outline-secondary">
               <span data-feather="calendar"></span>
                Nouveau compte
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
                <th>Crée le </th>
                <th>Nom d'utilisateur</th>
                <th>Adresse email</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tbody>
            @foreach($compte as $cmpt)
                <tr>
                    <th>{{ $cmpt->id }}</th>
                    <td>
                        {{ $cmpt->created_at }}<br/>
                        <small class="text-xs">{{ $cmpt->updated_at }}</small>
                    </td>
                    <td>{{ $cmpt->username }}</td>
                    <td>{{ $cmpt->email }}</td>
                   
                    <td>
                        <a href="{{ route('auth.edit', $cmpt->id) }}" class="btn btn-sm btn-primary">Editer</a>
                        @if($cmpt->deleted_at)
                            <form class="d-inline form-item-force-delete" method="post" action="{{ route('auth.force-destroy', $cmpt->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark btn-sm">Supprimer définitivement</button>
                            </form>
                            <form class="d-inline" method="post" action="{{ route('auth.restore', $cmpt->id) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">Restaurer</button>
                            </form>
                        @else
                            <form class="d-inline form-item-delete" method="post" action="{{ route('auth.destroy', $cmpt->id) }}">
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

