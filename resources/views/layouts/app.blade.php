<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
	<link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="../assets/css/style.css">
    <title>{{ config('app.name', 'InventoryX') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

  @yield('content')

<!-- Required Js -->
<script src="../assets/js/vendor-all.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>

<script src="../assets/js/pcoded.min.js"></script>


</body>
</html>
