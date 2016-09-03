{!! Form::model($dataEdit, ["route" => ['admin.events.update', $dataEdit->id], "method" => "PUT", 'files' => true, 'class' => 'cmxform form-horizontal', 'id' => 'editForm']) !!}

    @include('admin.event.inputs')

    <div class="modal-footer">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
    
{!! Form::close() !!}

<script>
    $("#editForm").formValidation({
        framework: "bootstrap",
        button: {
            selector: '#send',
            disabled: 'disabled'
        },
        icon: null,
        fields: {
            description: {
                validators: {
                    notEmpty: {
                        message: msgRequired
                    }
                }
            },
            importance: {
                validators: {
                    notEmpty: {
                        message: msgRequired
                    }
                }
            },
            date: {
                validators: {
                    notEmpty: {
                        message: msgRequired
                    }
                }
            }
        }
    });
</script>