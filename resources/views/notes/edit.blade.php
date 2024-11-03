@extends('layouts.bootstrap')

@section('title', 'Notes')

@section('content')

<body>

    <h1>Update Note: {{ $note->title }}</h1>

    <!-- Name, Color, User ID -->

    <form action="{{ route('notes.update', $note->id) }}" method="post">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" value="{{ $note->title }}">
            <br> <br>
            <label for="">Content</label>
            <input type="text" name="content" value="{{ $note->content }}">
            <br> <br>
            <label for="">Folder</label>
            <input type="text" name="folder_id" value="{{ $note->folder_id }}">
            <br> <br>
            <input type="submit" value="Update note">
        </div>
    </form>
</body>
</html>
@endsection