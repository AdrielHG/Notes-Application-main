<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Models\User;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $folders = Folder::get();

        return view('folders.index', compact('folders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('folders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Folder::create([
            'name'      => $request->name,
            'color'     => str_replace('#', '', $request->color),
            'user_id'   => 1
        ]);

        return to_route('folders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $folder = Folder::find($id);
        $user = User::find($folder->user_id);
        return view('folders.show', compact('folder', 'user'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $folder = Folder::find($id);
        return view('folders.edit', compact('folder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $folder = Folder::find($id);

        $folder->update([
            'title'      =>  $request->title,
            'content'     =>  $request->content,
            'folder_id'   => $request->folder_id
        ]);

        return to_route('folders.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $folder = Folder::find($id);
        $folder->delete();
        return to_route('folders.index');
    }
}
