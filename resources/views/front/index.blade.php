@extends('layouts.front')


@section('content')
   <div class="stage">
       <img src="{{url('images/logo.png')}}" alt="">
   </div>
 <div class="wrap">

   <div class="nav-home">
       <ul>
           <li class="current"><a href="{{ action('FrontController@index' )}}">Accueil</a></li>
           <li><a href="{{ action('FrontController@actualites' )}}">Actualités</a></li>
           <li><a href="{{ action('FrontController@lycee') }}">Lycée</a></li>
           <li><a href="{{ url('login') }}">Connexion</a></li>
       </ul>
   </div>
    <div class="ctt-post">
@forelse($posts as $post)
        
  
       
        <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p> 
            <p>{{ $post->date }}</p> 
            <p>{{ $post->user->username }}</p> 
            <a href="{{ action('FrontController@actualite', $post->id)}}">Lire la suite</a>
        </div>
      
        @empty
        Aucun article
@endforelse
                  
    </div>
    <div class="aside">
        <h3>A lire aussi</h3>
    </div>
  </div>
@endsection