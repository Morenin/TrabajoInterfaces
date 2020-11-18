@extends('dashboard')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Hojas de seguimiento</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('Tracing.create') }}"> Crear nuevo seguimiento</a>
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
          <th>Tipo</th>
          <th>Razón</th>
          <th>Observación</th>
          <th>Tutor</th>
          <th width="280px">Operation</th>
        </tr>
    @foreach ($tracings as $Tracing)
    <tr>
        @if($Tracing -> deleted == false)
          <td>{{$Tracing -> type }}</td>
          <td>{{$Tracing -> reason }}</td>
          <td>{{$Tracing -> observation }}</td>
          <td>{{$Tracing -> tutor_c_id }}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('Tracing.edit',$Tracing->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['Tracing.destroy', $Tracing->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
        @endif
    </tr>
    @endforeach
    </table>
    {!! $tracings->render() !!}
@endsection
