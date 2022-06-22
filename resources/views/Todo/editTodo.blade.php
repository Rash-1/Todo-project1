<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Todo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
    @if($errors->any())
        <div class="alert alert-dark text-danger">
            <ol>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ol>
        </div>
    @endif

    <form method="post" action="{{route('todos.update',['todo' =>$todo])}}">

        @csrf
        @method('put')
        <div class="mb-3 mt-3">
            <label for="title">Title:</label>
            <input value="{{$todo->title}}" type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
        </div>
        <div class="mb-3">
            <label for="slug">Slug:</label>
            <input value="{{$todo->slug}}" type="text" class="form-control" id="slug" placeholder="Enter slug" name="slug">
        </div>
        <div class="mb-3">
            <label for="description">Description:</label>
            <textarea class="form-control form-text" id="description" name="description" placeholder="Enter Description" rows="10" cols="10" >{{$todo->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit </button>
    </form>
</div>
</body>
</html>
