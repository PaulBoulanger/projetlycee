<header>
    <nav>
       <div class="wrap">
            <ul>
                <li><a href="{{ action('FrontController@index' )}}">Home</a></li>
                <li><a href="{{ action('FrontController@actualites' )}}">Actualités</a></li>
                <li><a href="{{ action('FrontController@lycee') }}">Lycée</a></li>
                <li><a href="{{ action('BackController@index') }}">Dashboard</a></li>
                <li><a href="{{ url('logout') }}">Deconnexion</a></li>
            </ul>
        </div>
    </nav>
</header>
