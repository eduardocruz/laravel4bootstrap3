
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('meta-title', 'Home' )</title>
    @section('home-title')
        {{Config::get('laravel4bootstrap3::app.app.name')}}
    @stop
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('packages/EduardoCruz/Laravel4bootstrap3/bower/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body class="grey-background">
@include('laravel4bootstrap3::layouts/partials/navbar')

<div class="container-fluid">
    @yield('container')
</div><!-- /.container -->

<script src="{{asset('packages/EduardoCruz/Laravel4bootstrap3/bower/jquery/dist/jquery.min.js')}}"></script>

@yield('scripts')
</body>
</html>
