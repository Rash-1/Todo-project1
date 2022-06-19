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
{{--@dd($item)--}}
<div class="container mt-3">

    <form method="post" action="{{route('update todo',$item)}}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="title">Title:</label>
            <input value="{{$item->title}}" type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
        </div>
        <div class="mb-3">
            <label for="slug">Slug:</label>
            <input value="{{$item->slug}}" type="text" class="form-control" id="slug" placeholder="Enter slug" name="slug">
        </div>
        <div class="mb-3">
            <label for="description">Description:</label>
            <input value="{{$item->description}}" type="text" class="form-control" id="description" placeholder="Enter Description" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Edit </button>
    </form>
</div>
</body>
</html>
