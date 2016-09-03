"use strict";

var msgRequired = "Campo requerido.";

(function(){

    self.Verification = function(user, password, token) {
        this.user = user;
        this.password = password;
        this.token = token;
        this.url = "/auth/verify/";
    }

    self.Verification.prototype = {
        verify: function(callback) {
            $.ajax({
                url: this.url,
                headers: {'X-CSRF-TOKEN': this.token},
                type: "POST",
                data: {
                    user: this.user,
                    password: this.password
                },
                success: function(response) {
                    if ( response == "ok") {
                        callback(null);
                    } else {
                        return callback(new Error("Correo o contraseña incorrectas"));
                    }
                }
            });
        }
    }

})();
