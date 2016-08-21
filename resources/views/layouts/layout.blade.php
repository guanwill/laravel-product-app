<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>

  <body>

    @include('layouts.menu')
    {{-- include takes the whole sub-view file and inserts it here --}}

    @yield('body')
    {{-- yield takes a section of a view and isnerts it here --}}

  </body>
</html>
