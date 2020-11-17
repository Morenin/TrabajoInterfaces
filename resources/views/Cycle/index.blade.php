@extends('dashboard')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ciclos</h2>
            </div>
            <div class="pull-right ">
                <a class="btn btn-success" href="{{ route('Cycle.create') }}"> Crear Nuevo Ciclo</a>
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
          <th>Grado</th>
          <th>Nombre</th>
          <th>Año</th>
          <th width="200px">Operaciones</th>
        </tr>
    @foreach ($Cycles as $Cycle)
        <tr>
        @if($Cycle -> deleted == false)
          <td>{{$Cycle -> grade }}</td>
          <td>{{$Cycle -> name }}</td>
          <td>{{$Cycle -> year}}</td>
            <td>
            
            <a class="btn btn-primary" href="{{ route('Cycle.edit',$Cycle->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['Cycle.destroy', $Cycle->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            </td>
        </tr>
        @endif
    @endforeach
    </table>
    {!! $Cycles->render() !!}
@endsection