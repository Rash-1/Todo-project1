@extends('layouts.TodoTable')
@section('show todo list')
    <tr>
        <td>{{$todos->id}}</td>
        <td>{{$todos->title}}</td>
        <td>{{$todos->slug}}</td>
        <td>{{$todos->description}}</td>
    </tr>
@endsection
