@extends('dashboard')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Resultado de Aprendizaje</h2>
            </div>
            <div class="pull-right ">
                <a class="btn btn-success" href="{{ route('Ra.create') }}"> Crear Nuevo Resultado</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered container">
        <tr>
          <th>Numero</th>
          <th>Descripcion</th>
          <th>Id_Modulo</th>
          <th width="200px">Operaciones</th>
        </tr>
    @foreach ($Ras as $Ra)
    <tr>
          <td>{{$Ra -> number }}</td>
          <td>{{$Ra -> description }}</td>
          <td>{{$Ra -> module_id}}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('Ra.edit',$Ra->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['Ra.destroy', $Ra->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $Ras->render() !!}
@endsection