{!! Form::model($new, ["route" => ['admin.news.update', $new->id], "method" => "PUT", 'files' => true, 'class' => 'form-horizontal', 'id' => 'editForm']) !!}

    @include('admin.new.inputsForm')

    <div class="modal-footer">
        {!! Form::submit('Crear', ['class' => 'btn btn-primary', 'id' => 'send']) !!}
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
    
{!! Form::close() !!}

<script>
    $("#id_local").val('<?php echo $new->id_local; ?>');

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