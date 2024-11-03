@extends('layouts.bootstrap')

@section('title', 'Folders')

@section('content')

<body>
    
    <h1>Create Folder</h1>

    <!-- Name, Color, User ID -->

    <form action="{{ route('folders.store') }}" method="post">
        @csrf
        
        <label for="">Name</label>
        <input type="text" name="name">
        <br> <br>
        <label for="">Color</label>
        <input type="color" name="color">
        <br> <br>
        <input type="submit" value="Create folder">
    </form>
</body>
</html>
@endsection