@extends('dashboard')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tareas</h2>
            </div>
            <div class="pull-right ">
                <a class="btn btn-success" href="{{ route('Task.create') }}"> Crear Nueva Tarea</a>
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
          <th width="200px">Operaciones</th>
        </tr>
    @foreach ($Tasks as $Task)
    <tr>
        @if($Task -> deleted == false)
          <td>{{$Task -> number }}</td>
          <td>{{$Task -> description }}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('Task.edit',$Task->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['Task.destroy', $Task->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
        @endif
    </tr>
    @endforeach
    </table>
    {!! $Tasks->render() !!}
@endsection