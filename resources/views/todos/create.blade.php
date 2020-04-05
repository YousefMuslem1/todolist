@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-offset-3"></div>
        <div class="col-md-6">
            {!! Form::open(['action' => 'TodoController@store', 'method' => 'post']) !!}
                {{ Form::bsText('title', '', ['required', 'placeholder' => 'Todo Title'] ) }}
                @if($errors->first('title'))
                    <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                 @endif
                {{ Form::bsTextArea('body', '', ['required', 'placeholder' => 'Todo Due'])}}
                @if($errors->first('body'))
                    <div class="alert alert-danger">{{ $errors->first('body') }}</div>
                @endif
                {{ Form::bsText('due', '', ['required', 'placeholder' => 'Todo Due']) }}
                @if($errors->first('due'))
                    <div class="alert alert-danger">{{ $errors->first('due') }}</div>
                @endif
                {{ Form::bsSubmit('submit', ['class' => 'btn btn-success']) }}
            {!! Form::close() !!}   
        </div>
        <div class="col-sm-offset-3"></div>
    </div>

@endsection