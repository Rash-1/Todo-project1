@extends('layouts.TodoTable')
@section('show todo list')
    <tr>
        <td>{{$result->id}}</td>
        <td>{{$result->title}}</td>
        <td>{{$result->slug}}</td>
        <td>{{$result->description}}</td>
    </tr>
@endsection
