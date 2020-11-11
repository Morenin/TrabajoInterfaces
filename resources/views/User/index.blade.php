@extends('dashboard')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de Usuarios</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('User.create') }}"> Crear Nuevo Usuario</a>
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
          <th>Apellido</th>
          <th>Movil</th>
          <th>Email</th>
          <th>Type</th>
          <th>Enterprtise_id</th>
          <th>cicle_id</th>
          <th width="280px">Operation</th>
        </tr>
    @foreach ($Users as $User)
    <tr>
          <td>{{$User -> name }}</td>
          <td>{{$User -> firstname }}</td>
          <td>{{$User -> phone}}</td>
          <td>{{$User -> email}}</td>
          <td>{{$User -> type}}</td>
          <td>{{$User -> enterprise_id}}</td>
          <td>{{$User -> cycle_id}}</td>
        <td>
            
            <a class="btn btn-primary" href="{{ route('User.edit',$User->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['User.destroy', $User->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $Users->render() !!}
@endsection
