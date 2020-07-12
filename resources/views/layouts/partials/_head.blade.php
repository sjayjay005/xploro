<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Plugins CSS -->
<link rel="stylesheet" href="{{ asset('./plugins/bootstrap-4.3.1/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('./plugins/slick-1.8.1/slick.css') }}">
<link rel="stylesheet" href="{{ asset('./plugins/meanmenu/meanmenu.css') }}">

<!-- fonts -->
<link rel="stylesheet" href="{{ asset('./fonts/ep-icon-fonts/css/ep-font.css') }}">
<link rel="stylesheet" href="{{ asset('./fonts/fontawesome-5/css/all.min.css') }}">

<title>{{ config('app.name') }}</title>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Custom Stylesheet -->
<link rel="stylesheet" href="{{ asset('./css/settings.css') }}">
<link rel="stylesheet" href="{{ asset('./css/style.css') }}">

@yield('styles')
