<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::orderBy('id', 'desc')->get();
        return view('todos.index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'due' => 'required'
        ]);
        Todo::create([
            'title' => $request->title,
            'body' => $request->body,
            'due' => $request->due
        ]);
        return redirect('/')->with('success', 'New Todo Inserted Successfully !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $todo = Todo::find($id);
        return  view('todos.show')->with('todo', $todo) ;
        // return view('todos.show')->with('todos', $todo); //id
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'due' => 'required'
        ]);
        $todo = Todo::findOrFail($id);
        $todo->title = $request->title;
        $todo->body = $request->body;
        $todo->due = $request->due;
        $todo->save();

        return redirect('/')->with('success', 'Todo updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect('/')->with('success', 'Deleted Todo Successfully!');
    }
}
