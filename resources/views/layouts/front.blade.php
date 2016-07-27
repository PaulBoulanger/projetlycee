<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{url('assets/styles.css')}}" media="all">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
    @include('partials.nav')
    @yield('content')
    @include('partials.footer')
</body>
</html>