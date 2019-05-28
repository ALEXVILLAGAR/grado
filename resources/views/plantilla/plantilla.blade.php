<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <title>
                    APP
                </title>
                <!-- Tell the browser to be responsive to screen width -->
                <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
                    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" rel="stylesheet">
                    </link>
                    <link href="{{ asset('css/card_animacion.css') }}" rel="stylesheet">
                    </link>
                    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
                    </link>
                    <!-- Font Awesome -->
                    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
                    </link>
                    <!-- Ionicons -->
                    <link href="{{ asset('css/ionicons.min.css.css') }}" rel="stylesheet">
                    </link>
                    <!-- Theme style -->
                    <link href="{{ asset('css/AdminLTE.min.css') }}" rel="stylesheet">
                    </link>
                    
                    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
                    <link href="{{ asset('css/skin-blue.min.css') }}" rel="stylesheet">
                    </link>
                    <script defer="" src="{{ asset('js/app.js') }}">
                    </script>
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.min.css" rel="stylesheet">
                    </link>

                    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
                    <!-- Google Font -->
                    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet">
                    </link>
                    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('plantilla/barra')
            <!-- Left side column. contains the logo and sidebar -->
            @include('plantilla/menu')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" id="app">
                <!-- Content Header (Page header) -->
                <!-- contenido de la vista  -->
                <section class="content container-fluid">
                    @yield('contenido')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>
                    Copyright © 2019
                    <a href="#">
                        APP
                    </a>
                    .
                </strong>
                todos los derechos reservados.
            </footer>
           
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
            <div class="control-sidebar-bg">
            </div>
        </div>
        <!-- ./wrapper -->
        <!-- REQUIRED JS SCRIPTS -->
        <!-- jQuery 3 -->
        <script defer="" src="{{ asset('js/jquery.min.js') }}">
        </script>
        <script src="bower_components/jquery/dist/jquery.min.js">
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script defer="" src="{{ asset('js/bootstrap.min.js') }}">
        </script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js">
        </script>
        <!-- AdminLTE App -->
        <script defer="" src="{{ asset('js/adminlte.min.js') }}">
        </script>
        <script src="dist/js/adminlte.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.min.js">
        </script>
        <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
    </body>
</html>