@extends('layout.admin')

@section('content')
    <div class="container">
        <h1>Dettaglio progetto</h1>
        <h3>{{$project->name}}</h3>
        <p>{{$project->description}}</p>
        <p>{{$project->date_creation}}</p>
    </div>
@endsection
