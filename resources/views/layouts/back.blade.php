<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link rel="stylesheet" href="{{url('assets/styles_back.css')}}" media="all">
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}" media="all">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
</head>
<body>


 @include('back.nav')
 <div class="fd-blanc">
     <div class="container">
    <div class="nav-aside col-md-3">
         @include('back.onglet')

     </div>
           <div class="col-md-9">
                @yield('content')
            </div>
        </div>
 </div>
</body>
</html>