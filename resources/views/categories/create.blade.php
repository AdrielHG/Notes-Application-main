<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Create Category</h1>

    <!-- Name, Color, User ID -->

    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        
        <label for="">Name</label>
        <input type="text" name="name">
        <br> <br>
        <label for="">Color</label>
        <input type="color" name="color">
        <br> <br>
        <input type="submit" value="Create category">
    </form>
</body>
</html>