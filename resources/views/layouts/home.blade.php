<!DOCTYPE html>
<html>
  <head>
      <link rel="icon" type="img/ico" href="/images/icons/mychildday.ico">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
      <meta charset="utf-8">

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" type="text/css" href="/css/reset.css">
      <link rel="stylesheet" type="text/css" href="/css/style_navBar.css">
      <link rel="stylesheet" type="text/css" href="/css/style_footer.css">

      <link rel="stylesheet" type="text/css" href="/css/style_rols.css">
      <link rel="stylesheet" type="text/css" href="/css/style_profile.css">

      <script src="/js/jquery-3.1.1.js" charset="utf-8"></script>
      <script src="/js/offpage.js" charset="utf-8"></script>

      <title>@yield('title')</title>
  </head>
  <body>
    <!-- HEADER -->
    @include('layouts.components.headers.home')

    <!-- POPUPS -->
    @if (isset($displayContact) && $displayContact == 'block')
      <div id="popUpContainerBackground" class="popUpContainerBackground" style="display: block">
        @include ('layouts.components.popUps.contact', ['display' => $displayContact,])
      </div>
    @endif

    <!-- CONTENT -->
    @yield('content')

    <!-- FOOTER -->

    @include('layouts.components.footers.home')

  </body>
  </html>
