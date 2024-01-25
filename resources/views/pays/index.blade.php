@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pays</h1>
    <a href="{{ route('pays.create') }}" class="btn btn-primary">Ajouter un Pays</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pays as $pay)
                <tr>
                    <td>{{ $pay->nom }}</td>
                    <td>
                        <a href="{{ route('pays.edit', $pay->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('pays.destroy', $pay->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
