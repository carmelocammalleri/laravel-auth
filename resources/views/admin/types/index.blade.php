@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>qui abbiamo i tipi di lavori</h1>
        {{-- add type --}}
        <form action="{{ route('admin.types.store')}}" method="POST" class="input-group mb-3">
            @csrf
            <input type="text"
            placeholder="Aggiungi Tecnologia" class="form-control" name="name" id="name">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Button</button>
        </form>
        {{-- /add type --}}
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($types as $type)
                <tr>
                  <th scope="row">{{$type->id}}</th>
                  <td>{{$type->name}}</td>
                  <td>
                    <a class="btn btn-success" href="{{ route('admin.types.show', $type->id)}}"><i class="fa-solid fa-eye"></i></a>
                  </td>
                  <td>
                    <form action="{{ route('admin.types.destroy', $type->id)}}"
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
