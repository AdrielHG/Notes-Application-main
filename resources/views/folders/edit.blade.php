<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Update Folder: {{ $folder->name }}</h1>

    <!-- Name, Color, User ID -->

    <form action="{{ route('folders.update', $folder->id) }}" method="post">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" value="{{ $folder->name }}">
            <br> <br>
            <label for="">Color</label>
            <input type="color" name="color" value="{{ $folder->color }}">
            <br> <br>
            <input type="submit" value="Update folder">
        </div>
    </form>
</body>

</html>