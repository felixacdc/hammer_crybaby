"use strict";

$(document).ready(function() {

    // Validacion de creacion de profesores
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


            image:{
                validators:{
                    notEmpty:{
                        message:msgRequired
                    }
                }
            },
                        

        }
    });

    // Validacion de edicion de profesores

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
                        

        }
    });

});
