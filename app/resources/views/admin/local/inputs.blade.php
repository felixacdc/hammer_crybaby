<input type="hidden" name="token" id="token" value="{{ csrf_token() }}">
<div class="form-group">
    {!! Form::label('name','Nombre:', ['class' => 'control-label col-lg-3']) !!}
    <div class="col-sm-9">
        {!! Form::text("name", null, ['class' => 'form-control', 'placeholder' => 'Escribe el nombre', 'required' => 'required', 'autocomplete'=>'off']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('description','Descripcion:', ['class' => 'control-label col-lg-3']) !!}
    <div class="col-sm-9">
        {!! Form::textarea("description", null, ['class' => 'form-control', 'placeholder' => 'Escribe La descripcion de la Empresa', 'required' => 'required', 'autocomplete'=>'off']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('products','Productos:', ['class' => 'control-label col-lg-3']) !!}
    <div class="col-sm-9">
        {!! Form::textarea("products", null, ['class' => 'form-control', 'placeholder' => 'Escribe una descripcion de Los productos', 'required' => 'required', 'autocomplete'=>'off']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('phone','Telefono:', ['class' => 'control-label col-lg-3']) !!}
    <div class="col-sm-9">
        {!! Form::text("phone", null, ['class' => 'form-control', 'placeholder' => 'Escribe el Telefono', 'required' => 'required', 'autocomplete'=>'off']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('facebook','Faceebok:', ['class' => 'control-label col-lg-3']) !!}
    <div class="col-sm-9">
        {!! Form::text("facebook", null, ['class' => 'form-control', 'placeholder' => 'Escribe el facebook', 'autocomplete'=>'off']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('id_category','Categoria:', ['class' => 'control-label col-lg-3']) !!}
    <div class="col-sm-9">
        {!! Form::select("id_category", $categories, null, ['class' => 'form-control', 'required' => 'required','id'=>'grad']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('image','Imagen:', ['class' => 'control-label col-lg-3']) !!}
    <div class="col-sm-9">
        {!! Form::file("image", null, ['class' => 'form-control', 'placeholder' => 'Escribe el telefono', 'required' => 'required', 'autocomplete'=>'off']) !!}
    </div>
</div>
