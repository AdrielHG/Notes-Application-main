<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;

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
            'user_id'   => 1,
            'categories_id' => 1
        ]);

        return to_route('folders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
