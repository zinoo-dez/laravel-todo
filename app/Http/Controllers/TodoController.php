<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $todos = Todo::where('id', 2)->get();
        // return $todos;

        // return $todos->only([1, 2]);
        // return $todos->diff(Todo::whereIn('id', [1, 2, 3])->get());
        // return $todos->except([1, 2]);
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
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
        // return $request->title;
        $request->validate([
            'title' => "required",
            'description' => "required",
        ]);
        Todo::create($request->all());
        // old school style
        // $todo = new Todo();
        // $todo->title = $request->title;
        // $todo->description = $request->description;
        // $todo->completed = $request->completed;
        // $todo->save();
        return redirect()->route('todos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        // return $todo;
        return view('todos.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => "required",
            'description' => "required",
        ]);
        $todo->update($request->all());
        return redirect()->route('todos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
