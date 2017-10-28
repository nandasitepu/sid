<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="token" id="token" value="{{ csrf_token() }}">
<title>SID - @yield('title')</title>


<!-- Loader -->
<!-- <link href="/css/loader.css" rel="stylesheet"> -->
<!-- Main CSS Bootstrap & FontAwesome as app.css -->
<link href="{{asset('css/app.css')}}" rel="stylesheet">
<link href="{{asset('css/sid.css')}}" rel="stylesheet">

<!-- Extra Java Script or CSS -->
@yield('extra')
