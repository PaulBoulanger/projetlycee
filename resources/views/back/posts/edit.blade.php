@extends('layouts.back')


@section('content')
    <form action="{{ action('PostController@update', $post)}}" method="post" enctype="multipart/form-data">
        {{ method_field('PUT')}}
        {{ csrf_field()}}
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
        
        <label for="content">Content</label>
        <textarea name="content" id="content">{{$post->content}}</textarea>
        
        <label for="date">Date</label>
        <input type="date" id="date" name="date">
        
        <label for="url_thumbnail">image</label>
        <input type="file" name="url_thumbnail" id="url_thumbnail">
        
        @if($post->url_thumbnail)
            <img src="{{ url('uploads/'.$post->id.'/'.$post->url_thumbnail) }}" alt="">
        @endif
        
        <button>Modifier</button>
        
    </form >


@endsection