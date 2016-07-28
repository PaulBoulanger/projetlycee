@extends('layouts.page')


@section('content')

<h2>Actualités</h2>

{!! $posts->render() !!}

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