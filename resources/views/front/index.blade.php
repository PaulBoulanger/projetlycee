@extends('layouts.front')


@section('content')
   <div class="stage">
       <img src="#" alt="" />
   </div>
 <div class="wrap">

   <div class="nav-home">
       <ul>
           <li><a href="#">Accueil</a></li>
           <li><a href="#">Actualités</a></li>
           <li><a href="#">Lycée</a></li>
           <li><a href="#">Connexion</a></li>
       </ul>
   </div>
    <div class="ctt-post">
@forelse($posts as $post)
        
  
       
        <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p> 
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