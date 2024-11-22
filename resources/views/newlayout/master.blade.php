<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, follow">
  <title>@yield('meta-title', 'Bora Comprar')</title>
  <meta name="description" content="@yield('meta-description', 'Bora Comprar')">
  @vite('resources/css-new/app.scss')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
  @include('newlayout.partials.top-bar')
  @include('newlayout.partials.header')
  @yield('content')
  @include('newlayout.partials.footer')
  @vite('resources/js-new/app.js')
</body>
</html>
