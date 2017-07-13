<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book Management | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @yield('header')

    @yield('sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>

    @yield('footer')

</div>

<script src="{{asset('assets/js/all.min.js')}}"></script>
@include('sweet::alert')
<script src="{{asset('assets/js/custom.js')}}"></script>

</body>
</html>
