@extends('layouts.back')


@section('content')
    
    
    {{Session::get('message')}}
    
    <a href="{{ action('UserController@create')}}">ADD</a>
    <table class="table">
        
        <tr>
            <th>Pseudo</th>
            <th>Email</th>
            <th>Classe</th>
            <th>Notes</th>
            <th>Supprimer</th>
        </tr>
        
        @foreach($users as $user)
        <tr>
            <td><a href="{{ action ('UserController@edit', $user)}}">{{$user->username}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td></td>
            <td>
               <form action="{{ action ('UserController@destroy', $user)}}" method="post">
                    {{method_field('DELETE')}}
                    {{ csrf_field()}}
                    <button>Supprimer</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
    


@endsection