@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Pays</h1>

    <form method="POST" action="{{ route('pays.store') }}">
        @csrf

        <div class="form-group">
            <label for="nom">Nom du Pays</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>


        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection
