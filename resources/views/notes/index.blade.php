<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>All Notes</h1>

    <a href="{{ route('notes.create') }}">Create new notes</a>
    
    <table>
        <thead>
            <tr>
               <th>ID</th> 
               <th>Title</th> 
            </tr>
        </thead>

        <tbody>
            @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->title }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>