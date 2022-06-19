
@extends('layouts.TodoTable')
@section('show todo list')
        @foreach($result as $item)
            <tr>
                <td>
                     {{$item->id}}
                </td>
                <td>
                     {{$item->title}}
                </td>
                <td>
                     {{$item->slug}}
                </td>
                <td>
                    {{$item->description}}
                </td>
                <td>
                    <a class="btn btn-warning" href="{{route('edit todo',['item'=>$item])}}">Edit</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="{{route('delete todo',[$item])}}">Delete</a>
                </td>
            <tr>
        @endforeach
@endsection
