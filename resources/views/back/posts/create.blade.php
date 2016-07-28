@extends('layouts.back')


@section('content')
    <form action="{{ action('PostController@store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field()}}
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="{{old('title')}}">
        
        <label for="content">Content</label>
        <textarea name="content" id="content">{{old('content')}}</textarea>
        
        <label for="date">Date</label>
        <input type="date" id="date" name="date">
        
        <label for="url_thumbnail">image</label>
        <input type="file" name="url_thumbnail" id="url_thumbnail">
        
        
        <button>Modifier</button>
        
    </form>


@endsection