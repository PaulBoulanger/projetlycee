@extends('layouts.front')


@section('content')
@if($post->url_thumbnail)
            <img src="{{ url('uploads/'.$post->id.'/'.$post->url_thumbnail) }}" alt="" class="img-responsive">
        @endif
<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
<div class="comments">
    @foreach($post->comments as $comment)
        <div class="comment">
            <p>{{ $comment->content }}</p>
            <p>{{ $comment->user->username }}</p>
            <p>{{ $comment->created_at }}</p>
        </div>
    @endforeach
    <div>
        <form action="{{ action('CommentController@store') }}" method="post">
           {{ csrf_field() }}
            <label for="content">Votre commentaire</label>
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <textarea name="content" id="content" placeholder="Votre Commentaire"></textarea>
            <button>Envoyer</button>
        </form>
    </div>
    
</div>
@endsection