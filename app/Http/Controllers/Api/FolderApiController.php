<?php

namespace App\Http\Controllers\Api;

use App\Models\Folder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FolderApiController extends Controller
{
    public function index(){
        $folders = Folder::all();

        return response()->json($folders);
    }

    public function show($id){
        $folder = Folder::find($id);

        if (!$folder) {
            return response()->json([
                'message' => 'Folder not found'
            ], 404);
        }

        return response()->json($folder);
    }
}
