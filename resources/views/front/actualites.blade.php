@extends('layouts.front')


@section('content')

<h2>Actualités</h2>

{!! $posts->render() !!}

@forelse($posts as $post)

        <div class="post">
           @if($post->url_thumbnail)
            <img src="{{ url('uploads/'.$post->id.'/'.$post->url_thumbnail) }}" alt="" class="img-responsive">
        @endif
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