<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Update User: {{ $user->title }}</h1>

    <!-- Name, Color, User ID -->

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" value="{{ $user->name }}">
            <br> <br>
            <label for="">Username</label>
            <input type="text" name="username" value="{{ $user->username }}">
            <br> <br>
            <label for="">Email</label>
            <input type="text" name="email" value="{{ $user->email }}">
            <br> <br>
            <label for="">Password</label>
            <input type="password" name="password">
            <br> <br>
            <input type="submit" value="Update User">
        </div>
    </form>
</body>

</html>