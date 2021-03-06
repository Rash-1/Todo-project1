<?php

namespace App\Http\Controllers;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();
        return view('Todo/showTodoList',['todos' =>$todos]);
    }

    /**
     * Show the form for creating a new resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Todo\TodoForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
     */
    public function store(TodoRequest $request)
    {
        $valid_data = $request->validated();
          $result = Todo::create([
                     'title' => $valid_data['title'],
                     'slug' => $valid_data['slug'],
                     'description' => $valid_data['description']
                     ]);
          if ($result)
          {
              request()->session()->flash('message','Todo created successfully');
              return redirect()->route('todos.index');
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
//     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        return view('Todo/showTodo',['todos' => $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
//     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        return view('todo/editTodo',['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
//     * @return \Illuminate\Http\Response
     */
    public function update(TodoRequest $request, Todo $todo)
    {
        $valid_data = $request->validated();
           $result = $todo->update([
                'title' => $valid_data['title'],
                'slug' => $valid_data['slug'],
                'description' => $valid_data['description'],
            ]);
           if ($result)
           {
               request()->session()->flash('message','Update successfully');
               return redirect()->route('todos.index');
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
//     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $result = $todo->delete();
        if ($result)
        {
            request()->session()->flash('message','Delete successfully');
            return redirect()->back();
        }
        return false;
    }
}
