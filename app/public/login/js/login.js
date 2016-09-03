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

    // $("#login").submit(function (e) {
    //     e.preventDefault();
    //     $(".homeloader").removeClass('fadeInDown').addClass('bounceOutUp');
    //     $("#login .btn-primary").prop('disabled', true);
    //     var verification_data = new Verification($("#user").val(), $("#password").val(), $("#token").val());

    //     verification_data.verify(function(err) {
    //         if (err) {
    //             $(".homeloader").show().addClass('fadeInDown');
    //             $(".page").css('height', '50vh');
    //             $("#login .btn-primary").prop('disabled', false);
    //         } else e.submit();
    //     });
    // });

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
                    }
                }
            }
        }
    })
    .on('success.form.fv', function (e) {
        
        e.preventDefault();
        var $form = $(e.target), fv = $form.data('formValidation');

        $(".homeloader").removeClass('fadeInDown').addClass('bounceOutUp');
        $("#login .btn-primary").prop('disabled', true);

        var verification_data = new Verification($("#user").val(), $("#password").val(), $("#token").val());

        verification_data.verify(function(err) {
            if (err) {
                $(".homeloader").show().addClass('fadeInDown');
                $(".page").css('height', '50vh');
                $("#login .btn-primary").prop('disabled', false);
            } else fv.defaultSubmit();
        });
        
    });
});
