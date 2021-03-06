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
      <link rel="stylesheet" type="text/css" href="/css/style_index.css">
      <link rel="stylesheet" type="text/css" href="/css/style_faq.css">
      <link rel="stylesheet" type="text/css" href="/css/style_terms.css">
      <link rel="stylesheet" type="text/css" href="/css/style_popup.css">
      <link rel="stylesheet" type="text/css" href="/css/style_terms.css">

      <script src="/js/offpage.js" charset="utf-8"></script>

      <title>@yield('title')</title>
  </head>
  <body>

    <!-- HEADER -->
    @include('layouts.components.headers.index')

    @if ($displayReg == 'block'|| $displayLog == 'block' || $displayEmailReset == 'block' || $displayPassReset == 'block' || $displayContact == 'block')
      <div id="popUpContainerBackground" class="popUpContainerBackground" style="display: block">
    @else
      <div id="popUpContainerBackground" class="popUpContainerBackground" style="display: none">
        @endif
        <!-- REG -->
        @include ('layouts.components.popUps.register', ['display' => $displayReg])
        <!-- LOG -->
        @include ('layouts.components.popUps.login', ['display' => $displayLog,])
        <!-- EMAILR -->
        @include ('layouts.components.popUps.emailReset', ['display' => $displayEmailReset,])
        <!-- PASSR -->
        @include ('layouts.components.popUps.passwordReset', ['display' => $displayPassReset,])
        <!-- CONTACT -->
        @include ('layouts.components.popUps.contact', ['display' => $displayContact,])

      </div>

    <!-- CONTENT -->
    @yield('content')

    <!-- FOOTER -->

    @include('layouts.components.footers.index')

  </body>
  </html>
