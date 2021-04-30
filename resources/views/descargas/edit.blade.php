@extends('descargas.layout')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Editar imagen</div>

          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <div class="card-body">
            <form action="{{ route('descargas.update', $descarga->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            Title:
            <br>
            <input type="text" name="title" class="form-control" value="{{ $descarga->title }}">

            <br>

            Image/File:
            <br>
            <input type="file" name="descarga_image" id="">
            <br><br>

            <input type="submit" value="Update descarga" class="btn btn-success">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection