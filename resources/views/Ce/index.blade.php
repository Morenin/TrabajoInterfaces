@extends('dashboard')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ciclos</h2>
            </div>
            <div class="pull-right ">
                <a class="btn btn-success" href="{{ route('Ce.create') }}"> Crear Nuevo Criterio</a>
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
          <th>Letra</th>
          <th>Descripcion</th>
          <th>Id_Ra</th>
          <th>Id_Task</th>
          <th>Marca</th>
          <th width="200px">Operaciones</th>
        </tr>
    @foreach ($Ces as $Ce)
    <tr>
          <td>{{$Ce -> word }}</td>
          <td>{{$Ce -> description }}</td>
          <td>{{$Ce -> ra_id}}</td>
          <td>{{$Ce -> task_id}}</td>
          <td>{{$Ce -> mark}}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('Ce.edit',$Ce->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['Ce.destroy', $Ce->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $Ces->render() !!}
@endsection