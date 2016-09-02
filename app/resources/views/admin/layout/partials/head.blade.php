<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>DataTables | Remark Admin Template</title>

  {!! Html::style('template/images/apple-touch-icon.png') !!}
  {!! Html::style('template/images/favicon.ico') !!}

  <!-- Stylesheets -->
  {!! Html::style('template/css/bootstrap.min.css') !!}
  {!! Html::style('template/css/bootstrap-extend.min.css') !!}
  {!! Html::style('template/css/site.min.css') !!}

  {!! Html::style('template/vendor/asscrollable/asScrollable.css') !!}
  {!! Html::style('template/vendor/intro-js/introjs.css') !!}
  {!! Html::style('template/vendor/switchery/switchery.css') !!}
  {!! Html::style('template/vendor/slidepanel/slidePanel.css') !!}
  {!! Html::style('template/vendor/flag-icon-css/flag-icon.css') !!}
  {!! Html::style('template/fonts/font-awesome/font-awesome.css') !!}

  @yield('styles')

  {!! Html::style('general/css/animate.css') !!}
  {!! Html::style('general/css/introLoader.css') !!}
  <!-- Page -->
  {!! Html::style('template/css/own/my.css') !!}

  <!-- Fonts -->
  {!! Html::style('template/fonts/web-icons/web-icons.min.css') !!}
  {!! Html::style('template/fonts/brand-icons/brand-icons.min.css') !!}
  {!! Html::style('http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic') !!}

  <!-- Inline -->
  <style>
    @media (max-width: 480px) {
      .panel-actions .dataTables_length {
        display: none;
      }
    }

    @media (max-width: 320px) {
      .panel-actions .dataTables_filter {
        display: none;
      }
    }

    @media (max-width: 767px) {
      .dataTables_length {
        float: left;
      }
    }

    #exampleTableAddToolbar {
      padding-left: 30px;
    }
  </style>

  <!--[if lt IE 9]>
    <script src="../../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    {!! Html::script('template/vendor/modernizr/modernizr.js') !!}
    {!! Html::script('template/vendor/breakpoints/breakpoints.js') !!}
    <script>
      Breakpoints();
    </script>
</head>