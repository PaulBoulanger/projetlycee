@extends('layouts.front')


@section('content')
 
@forelse($posts as $post)
    <div class="post">
        <a href="{{ action('FrontController@actualite', $post->id)}}"><h3>{{ $post->title }}</h3></a>
            @if($post->url_thumbnail)
            <img src="{{ url('uploads/'.$post->id.'/'.$post->url_thumbnail) }}" alt="" class="img-responsive">
        @endif
            <p>{{ $post->content }}</p> 
            <a class="lireplus" href="{{ action('FrontController@actualite', $post->id)}}">Lire la suite</a>
            <div class="stats">
                <span class="user"><span class="userico"></span>{{ $post->user->username }}</span>
                <span class="date"><span class="dateico"></span>{{ $post->date }}</span>
            </div>
        </div>
      
        @empty
        Aucun article
@endforelse
                  
    
@endsection