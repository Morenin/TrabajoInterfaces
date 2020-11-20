@extends('dashboard')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Lista de asistencias</h2>
            </div>
            @if(Auth::User() -> type == 'ad')
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('Assistance.create') }}"> Crear nueva asistencia</a>
            </div>
            @endif
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
          
          <th width="280px">Operation</th>
        </tr>
    @foreach ($assistances as $Assistance)
    <tr>
        @if(Auth::User()->id == $Assistance->student_id && $Assistance->accepted == false || Auth::User()-> type == 'ad' )
        <td>{{$Assistance -> student_id }}</td>
        <td>{{$Assistance -> date }}</td>
        <td>{{$Assistance -> assistance }}</td>
        
        <td>
            @if (Auth::User()->type === 'al')
                @if(date("D")=='Saturday')
                <a class="btn btn-primary" href="{{ route('Assistance.show',$Assistance->id) }}">Aceptar asistencia</a>
                @else
                Esperar a domingo para confirmar
                @endif            
            @else
            <a class="btn btn-primary" href="{{ route('Assistance.edit',$Assistance->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['Assistance.destroy', $Assistance->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endif
        @endif
        </td>
    </tr>
    @endforeach
    </table>
    {!! $assistances->render() !!}
@endsection
