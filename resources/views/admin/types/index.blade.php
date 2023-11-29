@extends('layout.admin')

@section('content')
    <div class="container">
        <p>qui abbiamo i tipi di lavori</p>
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
