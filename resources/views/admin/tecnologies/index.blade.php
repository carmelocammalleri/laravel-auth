@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Qui abbiamo tecnologie</h1>

        {{-- add technology --}}
        <form action="{{ route('admin.tecnologies.store')}}" method="POST" class="input-group mb-3">
            @csrf
            <input type="text"
            placeholder="Aggiungi Tecnologia" class="form-control" name="name" id="name">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Button</button>
        </form>
        {{-- /add technology --}}

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($tecnologies as $tecnology)
                <tr>
                  <th scope="row">{{$tecnology->id}}</th>
                  <td>{{$tecnology->name}}</td>
                  <td>
                    <a class="btn btn-success" href="{{ route('admin.tecnologies.show', $tecnology->id)}}"><i class="fa-solid fa-eye"></i></a>
                    <a class="btn btn-warning" href="{{route('admin.tecnologies.store')}}"><i class="fa-regular fa-pen-to-square"></i></a>
                    <form
                       class="d-inline-block"
                       action="{{ route("admin.tecnologies.destroy", $tecnology->id) }}"
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
    </div>
@endsection
