<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

class AccountController extends Controller
{
    public function accountGet() {
        return view('account');
    }

    public function accountPost(Request $request) {
        $icon = $request->icon;

        if ($icon->is)
        $path = $request->icon->store();

        $user = User::find(Auth::id());
        $user->icon = $path;
        $user->save();

        return back()->with('toast', 'アイコンを変更しました');
    }
}
