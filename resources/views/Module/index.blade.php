@extends('dashboard')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de Modulos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('Module.create') }}"> Crear nuevo módulo</a>
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
          <th>Nombre</th>
          <th>Ciclo</th>
          <th width="280px">Operation</th>
        </tr>
    @foreach ($modules as $Module)
    <tr>
          <td>{{$Module -> name }}</td>
          <td>{{$Module -> cycle_id }}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('Module.edit',$Module->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['Module.destroy', $Module->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $modules->render() !!}
@endsection
