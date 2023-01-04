<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/x-icon" href="{{url('image/favicon/favicon.png')}}" />
    <title>@yield('title')</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{url('/front_assets/css/styles.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{url('/bootstrap-3.4.1/dist/css/bootstrap.css')}}">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{url('/front_assets/fontawesome-free-5.15.4/css/all.css')}}">
    <link rel="stylesheet" href="{{url('/front_assets/css/style_edit.css')}}">
    <script type="text/javascript">
    var url = "{!!url('/')!!}";
    </script>
    
    <!-- Include the above in your HEAD tag ----->
   
    <!------ Include the above in your HEAD tag ---------->
    <style>
    .fab {
        padding: 20px;
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
    }

    /* Add a hover effect if you want */
    .fab:hover {
        opacity: 0.7;
    }

    .fab {
        padding: 20px;
        font-size: 30px;
        width: 30px;
        text-align: center;
        text-decoration: none;
        border-radius: 50%;
    }
    </style>
</head>

<body>
    {!! csrf_field() !!}
    <input type="hidden" id="_token" value="{{ csrf_token() }}">


    <!-- Responsive navbar-->
    @include('front.template.navbar')

    <!-- Page header with logo and tagline-->
    @include('front.template.header')
    <!-- Page content-->

    @yield('content')



    <!-- Footer-->
    @include('front.template.footer')

    <!-- User script -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="{{url('/front_assets/js/scripts.js')}}"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{url('/front_assets/js/scripts.js')}}"></script>
    <!--boostrap jquey -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <!-- boostrap script
    -->
    <script src="{{url('/bootstrap-3.4.1/dist/js/bootstrap.min.js')}}"></script>


</body>

</html>