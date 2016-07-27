@extends('layouts.back')


@section('content')
  <form action="{{ action('UserController@store')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field()}}
      <label for="title">Nom</label>
      <input type="text" name="username" id="title" value="{{old('username')}}">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="{{old('email')}}">

  <select name="role" id="role">
<option value="first_class">premiere S</option>
<option value="final_class">final S</option>
  </select>
      
      <button>Créer</button>
      
  </form>


@endsection