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

    $("#login").validate({
        rules: {
            password: {
                minlength:8
            }
        },
        messages: {
            user: {
                required: requiredVal
            },
            password: {
                required: requiredVal,
                minlength: "La contraseña debe tener 8 o mas caracteres."
            }
        },
        submitHandler: function(form) {
            $(".homeloader").removeClass('fadeInDown').addClass('bounceOutUp');
            $("#login .btn-primary").prop('disabled', true);
            var verification_data = new Verification($("#user").val(), $("#password").val(), $("#token").val());

            verification_data.verify(function(err) {
                if (err) {
                    $(".homeloader").show().addClass('fadeInDown');
                    $(".page").css('height', '50vh');
                    $("#login .btn-primary").prop('disabled', false);
                } else form.submit();
            });
        }
    });
});
