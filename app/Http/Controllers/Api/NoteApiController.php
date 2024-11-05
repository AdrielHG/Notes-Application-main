<?php

namespace App\Http\Controllers\Api;

use App\Models\Note;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoteApiController extends Controller
{
    public function index(){
        $notes = Note::all();

        return response()->json($notes);
    }

    public function show($id){
        $note = Note::find($id);

        if (!$note) {
            return response()->json([
                'message' => 'Note not found'
            ], 404);
        }

        return response()->json($note);
    }
}
