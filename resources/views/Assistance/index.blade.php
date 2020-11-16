@extends('dashboard')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de asistencias</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('Assistance.create') }}"> Crear nueva asistencia</a>
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
          <th>ID Estudiante</th>
          <th>Fecha</th>
          <th>Asistencia</th>
          <th>Aceptada</th>
          <th width="280px">Operation</th>
        </tr>
    @foreach ($assistances as $Assistance)
    <tr>
        <td>{{$Assistance -> student_id }}</td>
        <td>{{$Assistance -> date }}</td>
        <td>{{$Assistance -> assistance }}</td>
        <td>{{$Assistance -> accepted }}</td>
        <td>
        @if (auth()->user()->type === 'al')
            <button type="button" class="btn btn-primary">Aceptar</button>
        @else
            <a class="btn btn-primary" href="{{ route('Assistance.edit',$Assistance->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['Assistance.destroy', $Assistance->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        @endif
        </td>
    </tr>
    @endforeach
    </table>
    {!! $assistances->render() !!}
@endsection
