<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
    {!! Form::label('tipe', 'Tipe Dokumen :', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        <div class="input-group">
            {!! Form::text('tipename',null,['class'=>'form-control']) !!}
            {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
        </div>
    </div>
</div>