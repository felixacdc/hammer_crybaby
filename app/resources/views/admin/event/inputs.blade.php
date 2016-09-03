<div class="form-group">
    {!! Form::label('description','Descripcion:', ['class' => 'control-label col-lg-3']) !!}
    <div class="col-lg-9">
        {!! Form::textarea("description", null, ['class' => 'form-control', 'placeholder' => 'Escriba la descripción', 'required' => 'required', 'autocomplete'=>'off', 'rows' => '4', 'cols' => '50']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('date','Fecha:', ['class' => 'control-label col-lg-3']) !!}
    <div class="col-sm-9">
        {!! Form::date("date", null, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('importance','Importancia:', ['class' => 'control-label col-lg-3']) !!}
    <div class="col-sm-9">
        {!! Form::number("importance", null, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
</div>