<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
    
              <ul>
                   <li class="{{ Request::is('admin') ? 'current_dash' : '' }}"><a href="{{ action('BackController@index')}}">Dashboard</a></li>
                   <li class="{{ Request::is('admin/articles') ? 'current_articles' : '' }}"><a href="{{ action('PostController@index')}}">Articles</a></li>
                   <li class="{{ Request::is('admin/questions') ? 'current_qcm' : '' }}"><a href="{{ action('QuestionController@index')}}">QCM</a></li>
                   <li class="{{ Request::is('admin/eleves') ? 'current_eleves' : '' }}"><a href="{{ action('UserController@index')}}">Eleves</a></li>
              </ul>

</body>
</html>