<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Folder;
use \App\Models\Category;
use \App\Models\Note;


class DataController extends Controller
{
    public function index(){

        $users = User::all();
        $folders = Folder::all();
        $categories = Category::all();
        $notes = Note::all();

        //dd($users);
        //dd($categories);
        //dd($folders);
        //dd($notes);

        return view('index', compact('users', 'folders', 'notes', 'categories'));
    }
}
