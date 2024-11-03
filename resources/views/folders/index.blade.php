@extends('layouts.bootstrap')

@section('title', 'All Folders')

@section('content')
    <h1 class="text-center">All Folders</h1>
    <a href="{{ route('folders.create') }}" class="btn btn-primary mb-3">Create New Folder</a>

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
            @foreach ($folders as $folder)
                <tr>
                    <td>{{ $folder->id }}</td>
                    <td>{{ $folder->name }}</td>
                    <td>
                        <a href="{{ route('folders.show', $folder->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('folders.edit', $folder->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('folders.destroy', $folder->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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
