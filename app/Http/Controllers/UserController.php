<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(string $id) {
        return view('user.show', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function index() {
        return view('user.index', [
            'users' => User::all()
        ]);
    }
}
