@extends('layouts.bootstrap')

@section('title', 'All Notes')

@section('content')
    <h1 class="text-center">All Notes</h1>
    <a href="{{ route('notes.create') }}" class="btn btn-primary mb-3">Create New note</a>

    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->title }}</td>
                    <td>
                        <a href="{{ route('notes.show', $note->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('notes.destroy', $note->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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
