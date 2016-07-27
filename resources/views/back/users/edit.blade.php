@extends('layouts.back')


@section('content')
    <form action="{{ action('UserController@update', $user)}}" method="post" enctype="multipart/form-data">
        {{ method_field('PUT')}}
        {{ csrf_field()}}
        <label for="username">Nom</label>
        <input type="text" name="username" id="username" value="{{$user->username}}">
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{$user->email}}">
        
        <select name="role" id="role">
            <option value="first_class">Premiere S</option>
            <option value="final_class">Terminal S</option>
        </select>       
        
        <button>Modifier</button>
        
    </form>


@endsection