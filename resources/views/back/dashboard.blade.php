@extends('layouts.back')


@section ('content')
    @foreach($users as $user)
    
   <div class="user">
       {{$user->username}}
   </div>
   
  @endforeach    
   
   @foreach($posts as $post)
    
   <div class="post">
       {{$post->title}}
   </div>
   
  @endforeach
  
 @endsection