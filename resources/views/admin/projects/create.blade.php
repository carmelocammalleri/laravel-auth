@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Crea il tuo progetto</h1>
    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="date_creation" class="form-label">Data di creazione</label>
          <input type="date" class="form-control" id="date_creation" name="date_creation">
        </div>
        <div class="mb-3">
            <label for="web_site" class="form-label">Url</label>
            <input type="text" class="form-control" id="web_site" name="web_site">
        </div>
        <div class="mb-3">
            <label for="technology" class="form-label">Tecnologia</label>
            <input type="text" class="form-control" id="technology" name="technology">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>

        <button type="submit" class="btn btn-secondary ">Invia</button>
        <button type="reset" class="btn btn-danger">Annulla</button>
      </form>
</div>

@endsection
