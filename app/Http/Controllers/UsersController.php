<?php

namespace App\Http\Controllers;

use App\Models\User;


class UsersController extends Controller
{
    public function show()
    {
        return view('admin.pages.users')->with(['users' => User::all()]);
    }
}
