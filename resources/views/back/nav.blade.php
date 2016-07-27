<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <nav>
       <li><a href="{{ action('BackController@index')}}">Dashboard</a></li>
       <li><a href="{{ action('PostController@index')}}">Articles</a></li>
       <li><a href="{{ action('QuestionController@index')}}">Questions</a></li>
       <li><a href="{{ action('UserController@index')}}">Eleve</a></li>
   </nav>
    
</body>
</html>