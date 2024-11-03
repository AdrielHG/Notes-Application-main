<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\User;

class NoteController extends Controller
{
    public function index(){
        $notes = Note::get();

        return view('notes.index', compact('notes'));
    }

    public function create(){
        return view('notes.create');
    }

    public function store(Request $request){
        Note::create([
            'title'      => $request->title,
            'content'     => $request->content,
            'user_id'   => 1,
            'folder_id' => $request->folder
        ]);

        return to_route('notes.index');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $note = Note::find($id);
        $user = User::find($note->user_id);
        return view('notes.show', compact('note', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $note = Note::find($id);
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $note = Note::find($id);

        $note->update([
            'title'      =>  $request->title,
            'content'     =>  $request->content,
            'folder_id'   => $request->folder_id
        ]);

        return to_route('notes.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $note = Note::find($id);
        $note->delete();
        return to_route('notes.index');
    }
}
