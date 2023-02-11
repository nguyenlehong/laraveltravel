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
        $email = $request->user_email;
        
        $check = DB::table('user')
        ->where('user_email',$email)
        ->select('user_id')
        ->count();
       
        if ($check > 0 ) {
            Session::put('message_register', 'Email đã tồn tại!');
            return view('frontend.register');
        } else {
            $data = $request->all();
            $user = new User();
            //     name table            name form
            $user->user_email = $data['user_email'];
            $user->user_password = $data['user_password'];
            $user->save();
            // Session::put('user_email', $user->user_email);
            // Session::put('user_id', $user);
            return view('frontend.login');
        }
        


        // $data = $request->all();
        //     $user = new User();
        //     //     name table            name form
        //     $user->user_email = $data['user_email'];
        //     $user->user_password = $data['user_password'];
        //     $user->save();
        //     Session::put('user_email', $user->user_email);
        //     Session::put('user_id', $user);
        //     return Redirect::to('/');
    }
    public function logout()
    {
        Session::flush();
        return Redirect::to('/');
    }
    public function check_login(Request $request)
    {
        $user_email = $request->user_email;
        $user_password = $request->user_password;
        $result = DB::table('user')
            ->where('user_email', $user_email)
            ->where('user_password', $user_password)->first();

        if ($result == true) {
            Session::put('user_email', $result->user_email);
            Session::put('user_id', $result->user_id);
            return Redirect::to('/');
        } else {
            Session::put('message_login', 'Email hoặc mật khẩu không đúng!');
            return view('frontend.login');
        }
    }


}