<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

use Session;
session_start();
class VeController extends Controller


{
    public function dat_ve($chuyexe_id)
    {
        $chuyenxe = DB::table('chuyen_xe')
            ->join('xe', 'chuyen_xe.xe_id', '=', 'xe.xe_id')
            ->join('lo_trinh', 'chuyen_xe.lotrinh_id', '=', 'lo_trinh.lotrinh_id')
            ->select('chuyen_xe.*', 'xe.*', 'lo_trinh.*')
            ->where('chuyexe_id', $chuyexe_id)
            ->get();
        return view('frontend.ve.datVe')->with('chuyenxe', $chuyenxe);
    }
    public function save_ve(Request $request)
    {
        $giave= $request->gia;
        $data = array();
        $data['user_id'] = $request->user_id;
        $data['chuyexe_id'] = $request->chuyexe_id;
        $data['ten_user'] = $request->ten_user;
        $data['sdt'] = $request->sdt;
        $data['so_luong_ghe_dat'] = $request->so_luong_ghe_dat;
        $data['tong_tien'] = $giave * $request->so_luong_ghe_dat;
        $data['diem_dn'] = $request->diem_dn;     
        DB::table('ve')->insert($data);
        Session::put('save_ve', '.');
        return Redirect('/');
    }
    public function huong_dan(){
        return view('frontend.ve.huongDan');
    }
    public function ve_da_dat($user_id)
    {
        $ve = DB::table('user')
            ->join('ve', 'user.user_id', '=', 've.user_id')
            ->join('chuyen_xe', 'chuyen_xe.chuyexe_id' , '=', 've.chuyexe_id')
            ->join('xe', 'xe.xe_id', '=', 'chuyen_xe.xe_id')
            ->join('lo_trinh','lo_trinh.lotrinh_id', '=', 'chuyen_xe.lotrinh_id')
            ->select('chuyen_xe.*', 'xe.*', 'lo_trinh.*','user.*', 've.*')
            ->where('user.user_id', $user_id)
            ->where('chuyen_xe.trang_thai', '=', 'hien')
            ->get();
        $user = DB::table('user')
           ->where('user_id', $user_id)->get();

        return view('frontend.ve.veDaDat')
        ->with('ve', $ve)
        ->with('user', $user);
    }
    public function huy_ve($ve_id){
        DB::table('ve')->where('ve_id', $ve_id)->delete();
        return Redirect::to('/');
    }
    public function lich_su($user_id)
    {
        $ve = DB::table('user')
            ->join('ve', 'user.user_id', '=', 've.user_id')
            ->join('chuyen_xe', 'chuyen_xe.chuyexe_id' , '=', 've.chuyexe_id')
            ->join('xe', 'xe.xe_id', '=', 'chuyen_xe.xe_id')
            ->join('lo_trinh','lo_trinh.lotrinh_id', '=', 'chuyen_xe.lotrinh_id')
            ->select('chuyen_xe.*', 'xe.*', 'lo_trinh.*','user.*', 've.*')
            ->where('user.user_id', $user_id)
            ->where('chuyen_xe.trang_thai', '=', 'an')
            ->paginate(10);
            // ->get();
       

        return view('frontend.ve.lichSu')
        ->with('ve', $ve);
    }

}
// SELECT chuyen_xe.ngay, xe.bien_so, ve.tong_tien
// FROM user
// INNER JOIN ve
// on user.user_id = ve.user_id
// INNER JOIN chuyen_xe
// on chuyen_xe.chuyexe_id = ve.chuyexe_id
// INNER JOIN xe
// on xe.xe_id = chuyen_xe.xe_id
// INNER JOIN lo_trinh
// on lo_trinh.lotrinh_id = chuyen_xe.lotrinh_id
// WHERE user.user_id = '1'
// and chuyen_xe.trang_thai = 'hien'