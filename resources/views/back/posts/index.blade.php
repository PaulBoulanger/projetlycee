@extends('layouts.back')


@section('content')
    
    
    {{Session::get('message')}}
    
    <a href="{{ action('PostController@create')}}">ADD</a>
    <table class="">
        <tr>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Publié le</th>
            <th>Commentaires</th>
            <th>Statut</th>
            <th>Supprimer</th>
        </tr>
        
        @foreach($posts as $post)
        <tr>
            <td><a href="{{ action ('PostController@edit', $post)}}">{{$post->title}}</a></td>
            <td>{{$post->user->username}}</td>
            <td>{{$post->date}}</td>
            <td>{{count($post->comments)}}</td>
            <td>
                <div class="status status-{{$post->status}}"></div>
            </td>
            <td>
               <form action="{{ action('PostController@destroy', $post)}}" method="post">
                    {{method_field('DELETE')}}
                    {{ csrf_field()}}
                    <button>Supprimer</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
    


@endsection