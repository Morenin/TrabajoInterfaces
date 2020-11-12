@extends('dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar empresas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Enterprise.index') }}"> Volver</a>
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
    {!! Form::model($enterprises, ['method' => 'PATCH','route' => ['Enterprise.update', $enterprises->id]]) !!}
        @include('Enterprise.form')
    {!! Form::close() !!}

@endsection