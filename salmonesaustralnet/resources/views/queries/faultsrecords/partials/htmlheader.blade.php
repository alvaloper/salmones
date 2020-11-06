<head>
    <meta charset="UTF-8">
    <title> Salmones Austral - @yield('htmlheader_title', 'Your title here') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="{{{ asset('img/icon_transparent.png') }}}">
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
    @section('head')
    @show
</head>
