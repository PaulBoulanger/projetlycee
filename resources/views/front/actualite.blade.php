@extends('layouts.page')

@section('content')

<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>

@endsection