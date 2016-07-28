@extends('layouts.back')


@section('content')

{{ $question->content }}
<form action="{{ action('StudentController@validChoice', $question->id)}}" method="post">
{{ csrf_field() }}
  <input type="hidden" name="question_id" value="{{ $question->id }}">
@foreach($choices as $index => $choice)
<div>
<input type="hidden" name="id[]" value="{{ $choice->id}}">

<label for="">{{ $choice->content }}</label>
<label for="">Vrai</label>
<input type="radio" name="status[{{$index}}]" value="1">
<label for="">Faux</label>
<input type="radio" name="status[{{$index}}]" value="0">
</div>
@endforeach
<button>Valider</button>
</form>
@endsection