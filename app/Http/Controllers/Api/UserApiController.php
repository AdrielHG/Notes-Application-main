<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index(){
        $users = User::all();

        return response()->json($users);
    }

    public function show($id){
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }
        return response()->json($user);
    }
}
