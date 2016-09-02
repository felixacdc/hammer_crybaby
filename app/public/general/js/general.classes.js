"use strict";

/*
* Clase con funcionalidad para cargar contenido dinamicamente en el modal
*/
(function() {
    self.LoadModal = function(containerBase, titleEdit, btn) {
        this.containerBase = containerBase;
        this.titleEdit = titleEdit;
        this.btn = btn;
        this.url = "";
    }

    self.LoadModal.prototype = {
        prepareView: function() {
            this.containerBase.html('<h2 class="text-center">Cargando ....</h2>');
            this.titleEdit.text(this.btn.data('title'));
            this.url = this.btn.data('url');
            this.loadView();
        },
        loadView: function() {
            this.containerBase.load(this.url, function( response, status, xhr ) {
                if ( status == "error" ) {
                    var msg = "<h4 class='text-center'><strong>Ohh!</strong> A ocurrido un error intente nuevamente.</h4>";
                    msg += '<div class="modal-footer" style="padding-bottom: 0px;margin-top:35px"><button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button></div>';
                    $(this).html( msg );
                }
            });
        }
    }

    self.FillCombo = function(url, token) {
        this.token = token;
        this.url = url;
    }

    self.FillCombo.prototype = {
        fill: function(callback) {
            $.ajax({
                url: this.url,
                headers: {'X-CSRF-TOKEN': this.token},
                type: "POST",
                dataType: 'json',
                success: function(response) {
                    if ( response.length === 0 ) {
                        return callback(new Error("Error"));
                    } else {
                        callback(null, eval(response));
                    }
                }
            });
        }
    }
})();
