"use strict";

$(document).ready(function() {
    var requiredVal = "Campo requerido.";

    if ( $("#serverErrors").length > 0 ) {
      $(".body-sign").css('height', '60vh');
    }

    $("#element").introLoader({
        animation: {
            name: 'simpleLoader',
            options: {
                exitFx:'slideUp',
                ease: "easeInOutCirc",
                style: 'ocean',
                delayBefore: 1000,
                exitTime: 500
            }
        },

        spinJs: {
            lines: 13, // The number of lines to draw
            length: 20, // The length of each line
            width: 10, // The line thickness
            radius: 30, // The radius of the inner circle
            corners: 1, // Corner roundness (0..1)
            color: '#fff', // #rgb or #rrggbb or array of colors
        }
    });

    $("#login").formValidation({
        framework: "bootstrap",
        button: {
            selector: '#send',
            disabled: 'disabled'
        },
        icon: null,
        fields: {
            user: {
                validators: {
                    notEmpty: {
                        message: msgRequired
                    },
                    remote: {
                        message: 'El usuario o la contraseña son incorrectos.',
                        url: '/auth/verify',
                        headers: {'X-CSRF-TOKEN': $("#token").val()},
                        type: "POST",
                        data: function(validator, $field, value) {
                            return {
                                user: validator.getFieldElements('user').val(),
                                password: validator.getFieldElements('password').val()
                            };
                        }
                    }
                }
            },
            password: {
                validators: {
                    stringLength: {
                        min: 8,
                        message: 'Escriba 8 caracteres'
                    },
                    notEmpty: {
                        message: msgRequired
                    },
                    remote: {
                        message: 'El usuario o la contraseña son incorrectos.',
                        url: '/auth/verify',
                        headers: {'X-CSRF-TOKEN': $("#token").val()},
                        type: "POST",
                        data: function(validator, $field, value) {
                            return {
                                user: validator.getFieldElements('user').val(),
                                password: validator.getFieldElements('password').val()
                            };
                        }
                    }
                }
            }
        }
    })
    .on('change', '[name="user"]', function(e) {
      $('#login').formValidation('revalidateField', 'user');
    })

    .on('change', '[name="password"]', function(e) {
      $('#login').formValidation('revalidateField', 'password');
    });;
});
