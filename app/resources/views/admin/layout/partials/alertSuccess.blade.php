@if( Session::has('message') )
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="alert alert-success alert-block alertAdmin homeloader wow animated fadeInDown">
                <b>Éxito!</b> {{Session::get('message')}}
            </div>
        </div>
    </div>
@endif