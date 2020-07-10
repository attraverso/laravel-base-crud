<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}} ">
  {{-- <script src="node_modules/jquery/dist/jquery.min.js"></script> --}}
  <script src="{{asset('js/app.js')}} " charset="utf-8"></script>
  <title>@yield('page-title')</title>
</head>
<body>
  @include('partials.header')
  @yield('content')
</body>
</html>