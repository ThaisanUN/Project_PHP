<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','This is default title.')</title>
    <!-- Font awesome -->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
<!-- Bootstrap -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">   
<!-- Slick slider -->
<link href="{{asset('css/slick.css')}}" rel="stylesheet" type="text/css">          
<!-- Fancybox slider -->
<link href="{{asset('css/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" media="screen"> 
<!-- Theme color -->
<link id="switcher" href="{{asset('css/theme-color/default-theme.css')}}" rel="stylesheet">          
 
<!-- Main style sheet -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">    
 
 
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700" rel="stylesheet" type="text/css">
 
 
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!-- [if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif] -->
<!-- Javascript Files
================================================== --> 
 
   <!-- jQuery library -->
  <script src="{{asset('js/jquery.min.js')}}"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('js/bootstrap.js')}}"></script>   
  <!-- Slick slider -->
  <script src="{{asset('js/slick.js')}}" type="text/javascript"></script>
  <!-- Counter -->
  <script src="{{asset('js/waypoints.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/jquery.counterup.js')}}" type="text/javascript"></script>  
  <!-- Mixit slider -->
  <script src="{{asset('js/jquery.mixitup.js')}}" type="text/javascript"></script>
  <!-- Add fancyBox -->       
  <script src="{{asset('js/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
  <!-- Custom js -->
  <script src="{{asset('js/custom.js')}}"></script> 
</head>
<body>
    @include('inc.bar') 


   @include(inc.footer)
</body>
</html>