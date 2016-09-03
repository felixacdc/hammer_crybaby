{!! Form::open(["route" => "admin.events.store", "method" => "POST", 'class' => 'form-horizontal', 'id' => 'createForm','files'=>true]) !!}
    @include('admin.event.inputs')
    <div class="modal-footer">
        {!! Form::submit('Crear', ['class' => 'btn btn-primary', 'id' => 'send']) !!}
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
{!! Form::close() !!}

<script>
    $("#createForm").formValidation({
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