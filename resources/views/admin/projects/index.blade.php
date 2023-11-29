@extends('layout.admin')

@section('content')
    <div class="container">
        <h1>Qui progetti</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Data creazione</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($projects as $project)
                <tr>
                  <th scope="row">{{ $project->id}}</th>
                  <td>{{ $project->name}}</td>
                  <td>{{ $project->date_creation}}</td>
                  <td>
                    <a class="btn btn-success" href="{{ route('admin.projects.show', $project->id)}}"><i class="fa-solid fa-eye"></i></a>
                  </td>
                  <td>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}"
                       method="POST"
                       onsubmit="return confirm ('Sei sicuro di voler eliminare questo elemento?')">

                       @csrf
                       @method("DELETE")
                       <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>

        <div>
            {{$projects->links()}}
        </div>
    </div>
@endsection
