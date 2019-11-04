<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
    {!! Form::label('tipe', 'Standart ID :', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        <div class="input-group">
            <input type="text" class="form-control" name="standartid" value="{{ $data->standartid }}" readonly=""> 
            {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
    {!! Form::label('tipe', 'No :', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        <div class="input-group">
            {!! Form::text('no',null,['class'=>'form-control']) !!}
            {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
    {!! Form::label('tipe', 'Butir :', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        <div class="input-group">
            {!! Form::text('butir',null,['class'=>'form-control']) !!}
            {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
        </div>
    </div>
</div>

<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
    {!! Form::label('tipe', 'Deskriptor :', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        <div class="input-group">
           {!! Form::textarea('deskriptor', null, ['class' => 'form-control', 'rows' => 10, 'cols' => 100, 'style' => 'resize:none']) !!}
            {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
        </div>
    </div>
</div>