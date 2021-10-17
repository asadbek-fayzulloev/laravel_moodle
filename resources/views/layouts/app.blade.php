<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
      <meta name="author" content="Creative Tim">
      <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
      <!-- Favicon -->
      <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}"" type="image/png">
      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
      <!-- Icons -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
      <!-- Page plugins -->
      <!-- Argon CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/argon.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">

    </head>
<body>
    @include('includes.sidebar')
    <div class="main-content" id="app">

        {{-- @include('includes.navbar') --}}
        @yield('content')
        @include('includes.footer')
    </div>
 <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
