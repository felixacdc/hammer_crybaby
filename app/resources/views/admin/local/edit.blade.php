{!! Form::model($dataEdit, ["route" => ['admin.local.update', $dataEdit->id], "method" => "PUT", 'class' => 'form-horizontal', 'id' => 'editForm']) !!}

    <input type="hidden" name="id" id="id" value="{{ $dataEdit->id }}">

    @include('admin.administrator.manager.inputs')

    <div class="modal-footer">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary',  'id' => 'send']) !!}
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
{!! Form::close() !!}

{!! Html::script("backend/course.js") !!}
