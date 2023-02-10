<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function list_user()
    {
        $user = User::all();
        return view('backend.user.list')->with('user',$user);
    }
}