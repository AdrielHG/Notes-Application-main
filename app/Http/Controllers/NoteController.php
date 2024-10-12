<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

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
            'folder_id' => 1
        ]);

        return to_route('notes.index');
    }
}
