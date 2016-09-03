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
            name: {
                validators: {
                    notEmpty: {
                        message: msgRequired
                    }
                }
            },
            description: {
                validators: {
                    notEmpty: {
                        message: msgRequired
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: msgRequired
                    },
                    stringLength: {
                        min: 8,
                        message: 'Escriba 8 caracteres'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'Escriba solo numeros'
                    }
                }
            },
            products: {
                validators: {
                    notEmpty: {
                        message: msgRequired
                    },
                    
                    
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
            name: {
                validators: {
                    notEmpty: {
                        message: msgRequired
                    }
                }
            },
            description: {
                validators: {
                    notEmpty: {
                        message: msgRequired
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: msgRequired
                    },
                    stringLength: {
                        min: 8,
                        message: 'Escriba 8 caracteres'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'Escriba solo numeros'
                    }
                }
            },
            products: {
                validators: {
                    notEmpty: {
                        message: msgRequired
                    },
                    
                    
                }
            },

        }
    });

});
