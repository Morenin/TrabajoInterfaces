<div class="container-fluid col-sm-6">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Numero:</strong>
            {!! Form::text('number', null, array('placeholder' => 'number','class' => 'form-control')) !!}
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
            <strong>Id_Module:</strong>
            {!! Form::text('module_id', null, array('placeholder' => 'module_id','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>