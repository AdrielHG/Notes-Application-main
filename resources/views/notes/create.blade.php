<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Create Note</h1>

    <!-- Name, Color, User ID -->

    <form action="{{ route('notes.store') }}" method="post">
        @csrf
        
        <label for="">Title</label>
        <input type="text" name="title">
        <br> <br>
        <label for="">Content</label>
        <input type="text" name="content">
        <br> <br>
        <input type="submit" value="Create note">
    </form>
</body>
</html>