{!! Form::open(["route" => "admin.categories.store", "method" => "POST", 'class' => 'form-horizontal', 'id' => 'createForm','files'=>true]) !!}
    @include('admin.category.inputs')
    <div class="modal-footer">
        {!! Form::submit('Crear', ['class' => 'btn btn-primary', 'id' => 'send']) !!}
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
{!! Form::close() !!}
{!! Html::script("backend/categories.js") !!}
