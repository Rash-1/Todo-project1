<!DOCTYPE html>
<html lang="en">
<head>
    <title>Todo Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3 ">
    <table class="table table-dark table-striped table-bordered table-hover">
        @if(!is_iterable($todos))
            <caption>Todo number {{$todos->id}} </caption>
        @else
            <caption> Todo List</caption>
        @endif
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Description</th>
            @if(is_iterable($todos))
                <th>Edit</th>
                <th>Delete</th>
            @endif
        </tr>
        </thead>
        <tbody>
             @yield('show todo list')
        </tbody>
    </table>
    @if(is_iterable($todos))
        <div class="text-center mb-4">
             <a class="btn btn-primary col-6" href="{{route('create todo')}}">
                 Create New Todo
             </a>
        </div>
    @endif
</div>

</body>
</html>
