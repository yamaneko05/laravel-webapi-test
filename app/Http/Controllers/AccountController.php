<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function accountGet() {
        return view('account');
    }

    public function accountPost(Request $request) {
        $request->validate([
            'icon' => 'image'
        ]);

        $path = $request->icon->store('public/images');

        $user = User::find(Auth::id());
        $user->icon = basename($path);
        $user->save();

        return back()->with('toast', 'アイコンを変更しました');
    }
}
