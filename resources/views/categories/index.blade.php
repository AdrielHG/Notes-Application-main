@extends('layouts.bootstrap')

@section('title', 'All Categories')

@section('content')
    <h1 class="text-center">All Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Create New Category</a>

    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
