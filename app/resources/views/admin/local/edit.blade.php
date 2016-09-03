{!! Form::model($dataEdit, ["route" => ['admin.locals.update', $dataEdit->id], "method" => "PUT", 'class' => 'form-horizontal', 'id' => 'editForm']) !!}

    <input type="hidden" name="id" id="id" value="{{ $dataEdit->id }}">
    @include('admin.local.inputs')
    <div class="modal-footer">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary',  'id' => 'send']) !!}
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
{!! Form::close() !!}

{!! Html::script("backend/local.js") !!}
