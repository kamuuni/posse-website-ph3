<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // 管理者ユーザー
        $admins = User::where('is_admin', true)->latest()->get();

        // 一般ユーザー
        $users = User::where('is_admin', false)->latest()->get();

        return view('admin.users.index', compact('admins', 'users'));
    }

    public function destroy(User $user)
    {
        if ($user->is_admin) {
            return back()->with('error', '管理者アカウントを削除することはできません。');
        }

        $user->delete();

        return back()->with('status', 'ユーザーを削除しました。');
    }
}
