{!! Form::open(["route" => "admin.news.store", "method" => "POST", 'class' => 'form-horizontal', 'id' => 'createForm', 'files' => true]) !!}
    @include('admin.new.inputsForm')
    <div class="modal-footer">
        {!! Form::submit('Crear', ['class' => 'btn btn-primary', 'id' => 'send']) !!}
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
{!! Form::close() !!}

{{-- {!! Html::script('admin/js/own/payments.classes.js') !!}
{!! Html::script('admin/js/own/payments.js') !!} --}}

<script>
    $("#id_local").val(id_local);
    
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
            image: {
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