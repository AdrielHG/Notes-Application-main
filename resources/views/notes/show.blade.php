@extends('layouts.bootstrap')

@section('title', 'Notes')

@section('content')
<body>
    
    <h1>{{ $note->title }}</h1>
    
    <p>Content: {{ $note->content }}</p>

    <p>User: {{ $user->name }}</p>

    <p>Folder ID: {{ $note->folder_id }}</p>

</body>
</html>
@endsection