    @extends('layouts.app')

    @if(count($todos) > 0)
        @section('content')
        <h1 class="text-center">Todos</h1>
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="row">
            </div>
            @foreach($todos as $todo)
                <div class="well">
                    <h3> 
                         <a href="/todo/{{$todo->id}}">{{ $todo->title }} </a> <span class="label label-danger">{{ $todo->due }}</span>
                 
                    </h3>
                    <span><a href="/todo/{{ $todo->id }}/edit" class="btn btn-link">Edit</a> </span>
                    {!! Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => 'delete']) !!}
                       {{ Form::bsSubmit('Delete', ['class' => 'btn btn-link']) }}
                    {!! Form::close() !!}
                </div>
            @endforeach
        @endsection
        @else
            @section('content')
                <div class="alert alert-danger">No Todos To Show!!</div>
            @endsection
    @endif
  