@extends('layouts.back')


@section('content')
    <form action="{{ action('QuestionController@ChoiceUpdate', $question)}}" method="post" enctype="multipart/form-data">
        {{ method_field('PUT')}}
        {{ csrf_field()}}
        
        @foreach($question->choices as $index => $choice)
        
            <label>Choix {{ $index+1 }}</label>
            <input type="hidden" value="{{$choice->id}}" name="id[]">

            <input type="text" name="content[]" value="{{ $choice->content }}">
            <input type="hidden" name="status[{{ $index }}]" value="0">
            <label for="">Vrai</label>
            <input type="checkbox" id="yes-{{$index}}" name="status[{{ $index }}]" value="1" @if($choice->status) checked @endif>
        
        @endforeach
       
        <button>Modifier</button>
        
    </form>


@endsection