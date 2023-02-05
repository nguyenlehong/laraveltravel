<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

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
        Session::put('message', 'them tthanh cong');
        return view('frontend.ve.veDaDat');
    }
    
}