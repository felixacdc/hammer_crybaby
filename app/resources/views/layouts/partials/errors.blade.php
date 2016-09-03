<div class="col-md-4"></div>
<div class="col-md-4">
    <br>

    <div class="alert alert-danger homeloader animated">

            <strong>Oh!</strong> Las credenciales usuario o contraseña incorrectos.
    </div>
</div>
<div class="col-md-4"></div>



@if (count($errors) > 0)
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <br>
            <div class="alert alert-danger alert-dismissable wow zoomInDown" id="serverErrors" data-wow-duration="1.5s">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Oh!</strong> Por favor corrige los siguientes errores.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-4"></div>

    </div>
@endif

