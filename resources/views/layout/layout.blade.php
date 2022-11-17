<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="@yield('metaTitle')">
    <meta name="description" content="@yield('metaDescription')">

    <title>@yield('title')</title>



    <link rel="stylesheet" href="{{url('asset/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{url('asset/css/all.min.css')}}" />

    <link rel="stylesheet" href="{{url('asset/css/animate.min.css')}}" />

    <link rel="stylesheet" href="{{url('asset/css/owl.carousel.min.css')}}" />

    <link rel="stylesheet" href="{{url('asset/css/jquery.fancybox.min.css')}}" />

    <link rel="stylesheet" href="{{url('asset/css/tooltipster.min.css')}}" />

    <link rel="stylesheet" href="{{url('asset/css/cubeportfolio.min.css')}}" />

    <link rel="stylesheet" href="{{url('asset/css/revolution/navigation.css')}}" />

    <link rel="stylesheet" href="{{url('asset/css/revolution/settings.css')}}" />

    <link rel="stylesheet" href="{{url('asset/css/style.css')}}" />

    <link

      rel="stylesheet"

      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"

      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="

      crossorigin="anonymous"

      referrerpolicy="no-referrer"/>



      @yield('styles')



</head>

<body>



        <!--PreLoader-->

        {{-- <div class="loader">

            <div class="loader-inner">

              <div class="cssload-loader"></div>

            </div>

          </div> --}}



          @include('partial.header')



          @yield('content')



          @include('partial.footer')





          

          @yield('scripts')

    

</body>

</html>