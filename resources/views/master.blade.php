<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Teubenautos | @yield('tab')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css">
		<link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/lightbox.css">
    <link rel="stylesheet" href="/css/scrolling-nav.css">
    <link rel="stylesheet" href="/css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width"/>

    <script>  var baseUrl = "{{ url('/') }}"; </script>﻿
    @yield('style')
  </head>
  <body>
     @if (Auth::check())
     @include('partials._navbarAuth')
     @else
     @include('partials._navbar')
     @endif
     <div class="header">

     </div>
     <div class="textbalk">
       @yield('textbalk')
     </div>
    <div class="container">
        @if(Session::has('flash_message'))
          <div class="alert alert-success">{{Session::get('flash_message')}}</div>
        @endif
        @if(Session::has('flash_error'))
          <div class="alert alert-danger">{{Session::get('flash_error')}}</div>
        @endif
        @yield('content')
    </div>
    		  @include('partials._footer')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/lightbox.js') }}"></script>
    <script type="text/javascript" src="/js/image.js"></script>
    <script type="text/javascript" src="/js/scrolling-nav.js"></script>
    <script type="text/javascript" src="/js/imgsize.js"></script>

    @yield('code')
  </body>
</html>
