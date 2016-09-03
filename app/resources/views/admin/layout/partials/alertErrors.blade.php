@if( count($errors) > 0 )
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="alert alert-danger alertAdmin homeloader wow animated fadeInDown">
                <strong>Peligro!</strong> Por favor corrige los siguientes errores.<br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

@if( Session::has('error') )
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="alert alert-danger alert-block alertAdmin homeloader wow animated fadeInDown">
                <b>Peligro!</b> {{Session::get('error')}}
            </div>
        </div>
    </div>
@endif