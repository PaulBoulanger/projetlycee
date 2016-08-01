<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <header class="nav-back">
      <div class="container">
           <nav>
               <div class="col-md-4">
                    <a href="{{ action('FrontController@index')}}" class="return">Retour au site</a>
               </div>
               <div class="col-md-2 col-md-offset-6">
                   <a href="/logout" class="logout">Se déconnecter</a>
               </div>
           </nav>
       </div>
   </header>
    
</body>
</html>