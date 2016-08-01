<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{url('assets/styles.css')}}" media="all">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}" media="all">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
    @include('partials.nav')
    @include('partials.logo')
    @include('partials.navigation')
    <div class="container" style="margin-top:50px;">
        <div class="row">
          <div class="col-sm-12 col-md-9 col-lg-9">@yield('content')</div>
          <div class="col-sm-12 col-md-3 col-lg-3">@include('partials.sidebar')</div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>