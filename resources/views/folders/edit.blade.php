@extends('layouts.bootstrap')

@section('title', 'Folders')

@section('content')

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
            <input type="color" name="color" value="#{{ $folder->color }}">
            <br> <br>
            <input type="submit" value="Update folder">
        </div>
    </form>
</body>
</html>
@endsection