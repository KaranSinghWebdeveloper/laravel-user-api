<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        $users = User::all();
        return response()->json([
            'status' => true,
            'users' => $users,
        ], 200);
    }
}
