@extends('layouts.back')


@section('content')

Il vous reste {{ $count }} QCM à faire

@foreach($questions as $question)
    
    
    @if(\App\Score::where(['question_id' => $question->id, 'user_id' => Auth::user()->id])->get()->count() > 0)
    <div class="question">
        {{ $question->content }}
    </div>
    @else
    <div class="question">
        <a href="{{ action('StudentController@question', $question->id)}}">{{ $question->content }}</a>
    </div>
    @endif
    
    
@endforeach

@endsection 