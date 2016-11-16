<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>ATUPATO</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{asset('siminta')}}/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('siminta')}}/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('siminta')}}/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="{{asset('siminta')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('siminta')}}/assets/css/main-style.css" rel="stylesheet" />

    @stack('css')

</head>

<body>
<!--  wrapper -->
<div id="wrapper">
    <!-- navbar top -->
    @include('partials.header')
    <!-- end navbar top -->

    <!-- navbar side -->
    @include('partials.sidebar')
    <!-- end navbar side -->
    <!--  page-wrapper -->
    <div id="page-wrapper">

        @section('content')

        @show



    </div>
    <!-- end page-wrapper -->

</div>
<!-- end wrapper -->

<!-- Core Scripts - Include with every page -->
<script src="{{asset('siminta')}}/assets/plugins/jquery-1.10.2.js"></script>
<script src="{{asset('siminta')}}/assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="{{asset('siminta')}}/assets/plugins/metisMenu/jquery.metisMenu.js"></script>
{{--<script src="{{asset('siminta')}}/assets/plugins/pace/pace.js"></script>--}}
<script src="{{asset('')}}js/rails.js"></script>

@stack('js')

</body>

</html>
