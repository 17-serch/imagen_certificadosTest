@extends('descargas.layout')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">lista</div>

          <div class="card-body">
            <a href="{{ route('descargas.create') }}" class="btn btn-primary">agregar</a>
            <br> <br>

            <table class="table">
              <tr>
                <th>Title</th>
                <th>descargar</th>
                <th>Edit</th>
              </tr>
              @forelse ($descargas as $descarga)
                <tr>
                  <td>{{ $descarga->title }}</td>
                  <td><a href="{{ route('descargas.download', $descarga->uuid) }}">{{ $descarga->descarga_image }}</a></td>
                  <td><a href="{{ route('descargas.edit', $descarga->id) }}" class="btn btn-sm btn-danger">Editar</a></td>
                </tr>
              @empty
                <tr>
                  <td colspan="2">No books found</td>
                </tr>
              @endforelse
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection