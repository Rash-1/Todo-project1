<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function showlist()
    {
        $result = Todo::all();
        return view('Todo/showTodoList',['result' => $result]);
    }
    public function show(Todo $todo)
    {
        return view('Todo/showTodo',['result' => $todo]);
    }
    public function delete( Todo $todo)
    {
        $result = $todo->delete();
        if ($result)
        {
            return redirect()->route('todo list');
        }
        return false;
    }
    public function create()
    {
    return view('layouts/TodoForm');
    }
    public function store(Request $request)
    {
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->slug = $request->slug;
        $todo->description = $request->description;
        $todo->save();
        if ($todo->save())
        {
            return redirect()->route('todo list');
        }
        return false;
    }
    public function edit(Todo $item)
    {
        return view('todo/editTodo',['item' => $item]);
    }
    public function update(Request $request,Todo $item)
    {
        $item->title = $request->title;
        $item->slug = $request->slug;
        $item->description = $request->description;
        $result = $item->save();
        if ($result)
        {
            return redirect()->route('todo list');
        }
    }
}
