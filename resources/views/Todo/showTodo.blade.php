@extends('layouts.TodoTable')
@section('show todo list')
    <tr>
        <td>{{$todo->id}}</td>
        <td>{{$todo->title}}</td>
        <td>{{$todo->slug}}</td>
        <td>{{$todo->description}}</td>
    </tr>
@endsection
