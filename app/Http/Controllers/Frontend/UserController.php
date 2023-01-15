<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();
class UserController extends Controller
{
    public function register_save(Request $request)
    {
        $data = $request->all();
        $user = new User();
        //     name table            name form
        $user->user_email = $data['user_email'];
        $user->user_password = $data['user_password'];
        $user->save();
        Session::put('user_email', $user->user_email);
        Session::put('user_id', $user);
        return Redirect::to('/');
    }
    public function logout()
    {
        Session::flush();
        return Redirect::to('/');
    }
}
