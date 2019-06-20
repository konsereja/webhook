<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Webhooks</title>

<!-- Fonts -->
<!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

<!-- Styles -->
<link href="./css/app.css" rel="stylesheet" type="text/css">
<link href="./css/style.css" rel="stylesheet" type="text/css">
<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./js/script.js"></script>

</head>
<body>

<div class="flex-center position-ref full-height">
@if (Route::has('login'))
<div class="top-right links">
@auth
<a href="{{ url('/home') }}">Home</a>
@else
<a href="{{ route('login') }}">Login</a>
<a href="{{ route('register') }}">Register</a>
@endauth
</div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    @yield('content')
               </div>
            </div>
        </div>
    </div>
</div>

</div>





</body>
</html>


