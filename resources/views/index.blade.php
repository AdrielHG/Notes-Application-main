<h1>Data Overview</h1>

<h2>Users</h2>
<ul>
    @foreach($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ul>

<h2>Folders</h2>
<ul>
    @foreach($folders as $folder)
        <li>{{ $folder->name }} (User: {{ $folder->user->name }})</li>
    @endforeach
</ul>

<h2>Notes</h2>
<ul>
    @foreach($notes as $note)
        <li>{{ $note->title }} (Folder: {{ $note->folder->name }})</li>
    @endforeach
</ul>

<h2>Categories</h2>
<ul>
    @foreach($categories as $category)
        <li>{{ $category->name }}</li>
    @endforeach
</ul>
