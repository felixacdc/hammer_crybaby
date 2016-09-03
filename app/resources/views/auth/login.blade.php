@include('layouts.partials.head')
<body class="page-login layout-full" style="background:url(template/images/education.jpg) no-repeat center center fixed; background-size: cover;">

    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="element" class="introLoading"></div>
 
        <div class="col-md-12">
            @include('layouts.partials.errors')
        </div>

    
    
    <!-- Page -->
    <div class="page vertical-align text-center" >

        <div class="page-content vertical-align-middle">
            <div data-wow-duration="2s" data-wow-delay="0.5s" class="wow zoomInDown brand">
                <img class="brand-img wow zoomInDown" src="/template/images/logo_p.png" alt="...">
                <!-- <h2 class="brand-text">Remark</h2> -->
            </div>

            <p  class="wow zoomIn" data-wow-duration="0.5s" data-wow-delay="2s">BIENVENIDO</p>

            {!! Form::open(["url" => 'auth/login', "method" => "POST", 'id' => 'login']) !!}
                <input type="hidden" name="token" id="token" value="{{ csrf_token() }}">

                <div class="form-group wow zoomIn" data-wow-duration="1.5s" data-wow-delay="2s">
                    <label class="sr-only" for="user">Usuario</label>
                    {!! Form::text('user', old('user'), ['class' => 'form-control', "placeholder" => "Usuario", "required" => "required"]) !!}
                </div>
                <div class="form-group wow zoomIn" data-wow-duration="1.5s" data-wow-delay="2s">
                    <label class="sr-only" for="password">Contraseña</label>
                    {!! Form::password("password", ["class" => "form-control", "placeholder" => "Contraseña", "required" => "required"]) !!}
                </div>
                <div class="form-group clearfix wow zoomIn" data-wow-duration="1.5s" data-wow-delay="2s">
                    <a class="pull-right" href="forgot-password.html">Forgot password?</a>
                </div>

                <button id="send" type="button" class="btn btn-primary btn-block wow zoomIn" data-wow-duration="1.5s" data-wow-delay="2s">Iniciar Sesión</button>
            {!! Form::close() !!}

            <footer class="page-copyright wow zoomIn" data-wow-duration="1.5s" data-wow-delay="2s">
                <!-- <p>WEBSITE BY amazingSurge</p> -->
                <p>© 2015. TODOS LOS DERECHOS RESERVADOS.</p>
                <div class="social">
                    <a href="javascript:void(0)">
                        <i class="icon bd-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="javascript:void(0)">
                        <i class="icon bd-facebook" aria-hidden="true"></i>
                    </a>
                </div>
            </footer>
        </div>
    </div>
    <!-- End Page -->

@include('layouts.partials.scripts')

</body>

</html>
