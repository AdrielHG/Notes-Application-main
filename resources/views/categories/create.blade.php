@extends('layouts.bootstrap')

@section('title', 'Create Categories')

@section('content')
<body>
    
    <h1>Create Category</h1>

    <!-- Name, Color, User ID -->

    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        
        <label for="">Name</label>
        <input type="text" name="name">
        <br> <br>
        <label for="">Color</label>
        <input type="color" name="color">
        <br> <br>
        <input type="submit" value="Create category">
    </form>
</body>
</html>
@endsection
