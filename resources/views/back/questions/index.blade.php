@extends('layouts.back')


@section('content')
    
    
    {{Session::get('message')}}
    
    <a href="{{ action('QuestionController@create')}}">ADD</a>
    <table class="">
        <tr>
            <th>Question</th>
            <th>Classe</th>
            <th>Statut</th>
        </tr>
        
        @foreach($questions as $question)
        <tr>
            <td><a href="{{ action ('QuestionController@edit', $question)}}">{{$question->content}}</a></td>
            <td>{{$question->class_level}}</td>
            <td>{{$question->status}}</td>
            <td>
               <form action="{{ action('QuestionController@destroy', $question)}}" method="post">
                    {{method_field('DELETE')}}
                    {{ csrf_field()}}
                    <button>Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    


@endsection