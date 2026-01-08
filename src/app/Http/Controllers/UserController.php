<?php

namespace App\Http\Controllers;

use App\Models\User; // use App\Models\User; は残したままでOK
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showWebsite()
    {
        // 'welcome.blade.php' を表示する
        return view('welcome');
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

}