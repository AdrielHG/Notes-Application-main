<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Create User</h1>

    <!-- Name, Color, User ID -->

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        
        <label for="">Name</label>
        <input type="text" name="name">
        <br> <br>
        <label for="">Username</label>
        <input type="text" name="username">
        <br> <br>
        <label for="">Email</label>
        <input type="email" name="email">
        <br> <br>
        <label for="">Password</label>
        <input type="password" name="password">
        <br> <br>
        <input type="submit" value="Create user">
    </form>
</body>
</html>