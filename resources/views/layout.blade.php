<!DOCTYPE html>
<html>
<head>

    <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
@include('layout.header')
@yield('content')
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bin/materialize.min.js')}}"></script>
@yield('js')
</body>
</html>
