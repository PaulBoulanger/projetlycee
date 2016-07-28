@extends('layouts.front')


@section('content')

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