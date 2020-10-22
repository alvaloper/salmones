<head>
    <meta charset="UTF-8">
    <title> SalmonesAustral.Net - @yield('htmlheader_title', 'Your title here') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="{{{ asset('img/icon_transparent.png') }}}">
    <link rel="icon" href="img/logocolor_transparent.png" type="image/png" sizes="16x16">
    <!-- Bootstrap 3.3.4 -->
    {{--<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />--}}
    <link href="{{ asset('ajax/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ajax/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/skins/skin-blue.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Esta Seccion Corresponde a las pantallas flotantes para Incluir, Roles y Permisos por favor no modificar el orden -->
    @section('head')
    @show
</head>
