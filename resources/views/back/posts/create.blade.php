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
        
        <button>Modifier</button>
        
    </form>


@endsection