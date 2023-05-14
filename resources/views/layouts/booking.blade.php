<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> @yield('title', 'BookingHotel')</title>
        <link rel="stylesheet" href="{{asset('css/font.css')}}" />
        <link rel="stylesheet" href="{{asset('css/btr.css')}}" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('js/bootstrap.bundle.min.js')}}" />


        <link rel="stylesheet" type="text/css" href="resources/js/bootstrap.bundle.min.js" />
        <link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>
      
      
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
         @yield('styles')
    </head>
    <body>
        @yield('content')

         @include('partials.modal')
        @yield('scripts')
    </body>
</html>