@extends('layouts.bootstrap')

@section('title', 'Category')

@section('content')

<body>
    
    <h1>{{ $category->name }}</h1>

    <p>Color: #{{ $category->color }}</p>

    <p>User: {{ $user->name }}</p>

</body>
</html>

@endsection