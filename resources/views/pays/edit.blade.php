@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier le Pays</h1>
    <form method="POST" action="{{ route('pays.update', $pay->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom du Pays</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $pay->nom }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
