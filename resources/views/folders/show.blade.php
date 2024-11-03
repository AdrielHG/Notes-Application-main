@extends('layouts.bootstrap')

@section('title', 'Folders')

@section('content')
<body>
    
    <h1>{{ $folder->name }}</h1>
    
    <p>Color: {{ $folder->color }}</p>

    <p>User: {{ $user->name }}</p>

</body>
</html>

@endsection
