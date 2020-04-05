@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/">Back</a>
    <h3 class="text-info"> {{ $todo->title }} </h3>
    <span class="label label-danger">{{ $todo->due }}</span>
    <hr>
    <p>{{ $todo->body }}</p>
    <hr><hr>
    <span><a href="/todo/{{ $todo->id }}/edit" class="btn btn-link">Edit</a> </span>
    {!! Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => 'delete']) !!}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-link']) }}
    {!! Form::close() !!}
@endsection