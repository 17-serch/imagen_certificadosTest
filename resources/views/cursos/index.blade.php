@extends('cursos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cursos.create') }}"> CREAR NUEVO CURSO</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NOMBRE DEL CURSO</th>
            <th>DURACION DEL CURSO</th>
            <th>INFORMACION DEL CURSO</th>
            <th width="280px">ACCIONES</th>
        </tr>
        @foreach ($cursosNuevo as $curso_Nuevo => $cursos_Nuevo)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $cursos_Nuevo->nombre }}</td>
            <td>{{ $cursos_Nuevo->horas }}</td>
            <td>{{ $cursos_Nuevo->información }}</td>
            <td>
                <a href="{{ route('cursos.show',$cursos_Nuevo->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('cursos.edit',$cursos_Nuevo->id) }}" class="btn btn-primary">Editar</a>
                <a href="{{ route('curso__nuevos__destroy',$cursos_Nuevo->id) }}" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $cursosNuevo->links() !!}

@endsection
