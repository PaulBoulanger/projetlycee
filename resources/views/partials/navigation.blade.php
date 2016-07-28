<div class="container">
    <div class="row nav-home">
          <div class="{{ Request::is('/') ? 'current_home' : '' }} col-md-3"><a class="home" href="{{ action('FrontController@index' )}}">Accueil</a></div>
          <div class="{{ Request::is('actualites') ? 'current_actus' : '' }} col-md-3"><a class="actu" href="{{ action('FrontController@actualites' )}}">Actualités</a></div>
          <div class="{{ Request::is('lycee') ? 'current_lycee' : '' }} col-md-3"><a class="lycee" href="{{ action('FrontController@lycee') }}">Lycée</a></div>
          <div class="connexion col-md-3"><a class="on" href="{{ action('BackController@index') }}">Connexion</a></div>
    </div>
</div>