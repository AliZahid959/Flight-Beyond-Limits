<!DOCTYPE html>
<!-- beautify ignore:start -->
<html lang="en">
  <head>

    <title>Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('front/assets/img/Favicon.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('front/assets/img/Favicon.png')}}">

    <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
  />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('back/assets/css/demo.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/datatable/datatables.min.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('back/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('back/assets/js/config.js') }}"></script>

    <style>
        .Publish{

            background-color: #198754 !important;
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: .75em;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
        }

        .Draft{

            background-color: #dc3545 !important;
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: .75em;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
        }
    </style>

    @yield('css')
  </head>

  <body>

    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        @include('back.layout.sidebar')
        <div class="layout-page">
          @include('back.layout.header')
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                @include('back.layout.errors')
              @include('back.layout.status')
              @yield('content')
            </div>
          <div class="content-backdrop fade"></div>
        </div>
      </div>
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>


    <script src="{{ asset('back/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('back/assets/vendor/js/menu.js') }}"></script>

    <script src="{{ asset('back/assets/vendor/libs/datatable/datatables.min.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('back/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('back/assets/js/main.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    @yield('script')
  </body>
</html>
