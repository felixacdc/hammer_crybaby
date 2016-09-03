<input type="hidden" name="token" id="token" value="{{ csrf_token() }}">
<div class="form-group">
    {!! Form::label('name','Descripcion:', ['class' => 'control-label col-lg-3']) !!}
    <div class="col-sm-9">
        {!! Form::text("description", null, ['class' => 'form-control', 'placeholder' => 'Escribe la descripcion de la Categoria', 'required' => 'required', 'autocomplete'=>'off']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('image','Imagen:', ['class' => 'control-label col-lg-3']) !!}
    <div class="col-sm-9">
        {!! Form::file("image", null, ['class' => 'form-control', 'placeholder' => 'Escribe el telefono', 'required' => 'required', 'autocomplete'=>'off']) !!}
    </div>
</div>
