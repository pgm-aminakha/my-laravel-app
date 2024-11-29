<?php 

namespace App\Http\Controllers;

use App\Models\User; 

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('userDetail', ['user' => $user]);
    }
}
