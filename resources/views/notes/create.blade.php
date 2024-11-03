@extends('layouts.bootstrap')

@section('title', 'Notes')

@section('content')
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
@endsection