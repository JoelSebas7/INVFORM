<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idEstudiante') }}
            {{ Form::text('idEstudiante', $matricula->idEstudiante, ['class' => 'form-control' . ($errors->has('idEstudiante') ? ' is-invalid' : ''), 'placeholder' => 'Idestudiante']) }}
            {!! $errors->first('idEstudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idPeriodo') }}
            {{ Form::text('idPeriodo', $matricula->idPeriodo, ['class' => 'form-control' . ($errors->has('idPeriodo') ? ' is-invalid' : ''), 'placeholder' => 'Idperiodo']) }}
            {!! $errors->first('idPeriodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMateria') }}
            {{ Form::text('idMateria', $matricula->idMateria, ['class' => 'form-control' . ($errors->has('idMateria') ? ' is-invalid' : ''), 'placeholder' => 'Idmateria']) }}
            {!! $errors->first('idMateria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>