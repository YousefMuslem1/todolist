@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => ['TodoController@update', $todo->id], 'method'=> 'put']) !!}
        {{ Form::bsText('title', $todo->title, ['required', 'placeholder' => 'Todo Title'] ) }}
            @if($errors->first('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                @endif
            {{ Form::bsTextArea('body', $todo->body, ['required', 'placeholder' => 'Todo Due'])}}
            @if($errors->first('body'))
                <div class="alert alert-danger">{{ $errors->first('body') }}</div>
            @endif
            {{ Form::bsText('due', $todo->due, ['required', 'placeholder' => 'Todo Due']) }}
            @if($errors->first('due'))
                <div class="alert alert-danger">{{ $errors->first('due') }}</div>
            @endif
        {{ Form::bsSubmit('submit', ['class' => 'btn btn-success']) }}
    
    {!! Form::close() !!}
@endsection