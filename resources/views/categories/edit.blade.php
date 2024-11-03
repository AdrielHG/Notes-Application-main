@extends('layouts.bootstrap')

@section('title', 'All Categories')

@section('content')
<body>
    
    <h1>Update Category: {{ $category->name }}</h1>

    <!-- Name, Color, User ID -->

    <form action="{{ route('categories.update', $category->id) }}" method="post">
        @csrf
        @method('PATCH')
        
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $category->name }}">
        <br> <br>
        <label for="">Color</label>
        <input type="color" name="color" value="#{{ $category->color }}">
        <br> <br>
        <input type="submit" value="Update category">
    </form>
</body>
</html>
@endsection
