<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ChuyenXe;
use App\Models\Xe;
use App\Models\LoTrinh;
class FrontendController extends Controller
{
    public function index()
    {
        $chuyenxe = DB::table('chuyen_xe')
            ->join('xe', 'chuyen_xe.xe_id', '=', 'xe.xe_id')
            ->join('lo_trinh', 'chuyen_xe.lotrinh_id', '=', 'lo_trinh.lotrinh_id')
            ->select('chuyen_xe.*', 'xe.*', 'lo_trinh.*')
            ->where('trang_thai', 'hien')
            ->get();
        return view('frontend.home')
            ->with('chuyenxe',$chuyenxe);
    }
    public function login()
    {
        return view('frontend.login');
    }
    public function register()
    {
        return view('frontend.register');
    }

    public function dat_ve()
    {
        return view('frontend.ve.datVe');
    }
    public function ve_da_dat()
    {
        return view('frontend.ve.veDaDat');
    }

}