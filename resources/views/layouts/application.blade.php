<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="font-heading bg-brand-light">
    @include('partials.flash')
    @yield('content')
  </body>
</html>