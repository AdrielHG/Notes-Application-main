<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>{{ $note->title }}</h1>
    
    <p>Content: {{ $note->content }}</p>

    <p>User: {{ $user->name }}</p>

    <p>Folder ID: {{ $note->folder_id }}</p>

</body>
</html>