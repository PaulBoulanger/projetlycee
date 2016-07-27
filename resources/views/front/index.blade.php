@extends('layouts.front')


@section('content')

<h2>Homepage</h2>

@forelse($posts as $post)

        <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p> 
            <a href="{{ action('FrontController@actualite', $post->id)}}">Lire la suite</a>
        </div>
        @empty
        Aucun article
@endforelse

@endsection