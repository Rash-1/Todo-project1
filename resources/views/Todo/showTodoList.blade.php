
@extends('layouts.TodoTable')
@section('show todo list')
        @foreach($todos as $todo)
            <tr>
                <td>
                     {{$todo->id}}
                </td>
                <td>
                     {{$todo->title}}
                </td>
                <td>
                     {{$todo->slug}}
                </td>
                <td>
                    {{$todo->description}}
                </td>
                <td>
                    <a class="btn btn-warning" href="{{route('todos.edit',['todo'=>$todo])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('todos.destroy',['todo'=>$todo])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            <tr>
        @endforeach
@endsection
