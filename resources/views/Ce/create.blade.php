@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Añadir nuevo criterio de evaulacion</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Ce.index') }}"> Volver</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'Ce.store','method'=>'POST')) !!}
         @include('Ce.form')
    {!! Form::close() !!}
@endsection