<head>
    <meta charset="utf-8"/>
    <title>Metronic | @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <meta name="MobileOptimized" content="320">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="{{URL::asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>


    <link href="{{URL::asset('assets/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>


    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    @yield('styles')

    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN THEME STYLES -->

    <link href="{{URL::asset('assets/css/style-metronic.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/css/style-responsive.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{URL::asset('assets/css/pages/tasks.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/css/themes/default.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>


    <link rel="shortcut icon" href="favicon.ico"/>
</head>