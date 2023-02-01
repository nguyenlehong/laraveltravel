<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class BackendController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }
    public function login()
    {
        return view('backend.login');
    }
    public function check_login_admin(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;
        $result = DB::table('admin')
            ->where('admin_email', $admin_email)
            ->where('admin_password', $admin_password)->first();

        if ($result == true) {
            Session::put('admin_name', $result->admin_email);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/list-user');
        } else {
            Session::put('message', 'Email hoặc mật khẩu không đúng!');
            return view('backend.login');
        }
    }
    public function logout_admin()
    {
        Session::flush();
        return Redirect::to('/admin');
    }
}
