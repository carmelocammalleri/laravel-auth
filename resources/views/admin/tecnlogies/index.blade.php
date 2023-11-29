@extends('layout.admin')

@section('content')
    <div class="container">
        <p>qui abbiamo le tecnologie</p>
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
                  </td>
                  <td>
                     <form action="{{ route("admin.tecnologies.destroy", $tecnology->id) }}"
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
