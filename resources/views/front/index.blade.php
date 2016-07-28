@extends('layouts.front')


@section('content')
<<<<<<< HEAD
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
=======
 
>>>>>>> a776078be80196e8700f038ea210b616e619db2b
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
                  
    

@endsection