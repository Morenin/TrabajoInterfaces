@extends('dashboard')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de Empresas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('Enterprise.create') }}"> Crear nueva empresa</a>
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
          <th>Email</th>
          <th width="280px">Operation</th>
        </tr>
    @foreach ($enterprises as $Enterprise)
    <tr>
          <td>{{$Enterprise -> name }}</td>
          <td>{{$Enterprise -> email }}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('Enterprise.edit',$Enterprise->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['Enterprise.destroy', $Enterprise->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $enterprises->render() !!}
@endsection
