@extends('layouts.back')


@section('content')
    <form action="{{ action('QuestionController@update', $question)}}" method="post" enctype="multipart/form-data">
        {{ method_field('PUT')}}
        {{ csrf_field()}}
        
        <label for="content">Contenu de la question</label>
        <textarea name="content" id="content">{{$question->content}}</textarea>
        
        <label for="class_level">Niveaux</label>
        <select name="class_level" id="class_level">*
            <option value="first_class">Premiere S</option>
            <option value="final_class">Terminale S</option>
        </select>
        
        
        <label for="number">Nombre de choix(*)</label>
        <input type="text" name="number" id="number" values="{{$question->number}}">
        
        <button>Modifier</button>
        
    </form>


@endsection