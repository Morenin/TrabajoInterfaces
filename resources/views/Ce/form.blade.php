<div class="container-fluid col-sm-6">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Letra:</strong>
            {!! Form::text('word', null, array('placeholder' => 'word','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descripcion:</strong>
            {!! Form::text('description', null, array('placeholder' => 'description','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Id_Ra:</strong>
            {!! Form::text('ra_id', null, array('placeholder' => 'ra_id','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Id_Task:</strong>
            {!! Form::text('task_id', null, array('placeholder' => 'task_id','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Marca:</strong>
            {!! Form::text('mark', null, array('placeholder' => 'mark','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>