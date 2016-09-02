"use strict";

function convertToJson(string) {
    string = string.replace(/\\n/g, "\\n")
           .replace(/\\'/g, "\\'")
           .replace(/\\"/g, '\\"')
           .replace(/\\&/g, "\\&")
           .replace(/\\r/g, "\\r")
           .replace(/\\t/g, "\\t")
           .replace(/\\b/g, "\\b")
           .replace(/\\f/g, "\\f");

    string = string.replace(/[\u0000-\u0019]+/g,"");

    return JSON.parse(string)
}

var msgRequired = 'El campo es requerido';

$(document).ready(function(){

    $("#element").introLoader({
        animation: {
            name: 'simpleLoader',
            options: {
                exitFx:'slideUp',
                ease: "easeInOutCirc",
                style: 'ocean',
                delayBefore: 1000,
                exitTime: 500,
                onAfter: function() {
                    $(".homeloader").css("display", "block");
                    setTimeout(function () {
                        $(".alertAdmin").removeClass('fadeInDown').addClass('bounceOutUp');
                    }, 5000);
                }
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

    /*
    * Funcion para cargar contenido dinamicamente
    */

    $('.loadModal').on('click', function(e){
        e.preventDefault();
        var loadModal = new LoadModal($("#containerBase"), $(".titleEdit"), $(this));
        loadModal.prepareView();
    });
});
