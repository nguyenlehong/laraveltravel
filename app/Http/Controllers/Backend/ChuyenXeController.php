<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\ChuyenXe;
use App\Models\Xe;
use App\Models\LoTrinh;
use Session;
Session_start();

class ChuyenXeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xe = Xe::all();
        $lotrinh = LoTrinh::all();

        $chuyenxe = DB::table('chuyen_xe')
            ->join('xe', 'chuyen_xe.xe_id', '=', 'xe.xe_id')
            ->join('lo_trinh', 'chuyen_xe.lotrinh_id', '=', 'lo_trinh.lotrinh_id')
            ->select('chuyen_xe.*', 'xe.*', 'lo_trinh.*')
            ->where('trang_thai', 'hien')
            ->get();


        return view('backend.chuyenXe.list')
            ->with('xe', $xe)
            ->with('lotrinh', $lotrinh)
            ->with('chuyenxe', $chuyenxe);
    }
    // $users = DB::table('users')
    //         ->join('contacts', 'users.id', '=', 'contacts.user_id')
    //         ->join('orders', 'users.id', '=', 'orders.user_id')
    //         ->select('users.*', 'contacts.phone', 'orders.price')
    //         ->get();

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        ChuyenXe::create($input);
        Session::put('message_chuyenxe', 'cx');
        return redirect('chuyenxe');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($chuyexe_id)
    {
        $xe = Xe::all();
        $lotrinh = LoTrinh::all();

        $chuyenxe = DB::table('chuyen_xe')
            ->join('xe', 'chuyen_xe.xe_id', '=', 'xe.xe_id')
            ->join('lo_trinh', 'chuyen_xe.lotrinh_id', '=', 'lo_trinh.lotrinh_id')
            ->select('chuyen_xe.*', 'xe.*', 'lo_trinh.*')
            ->where('chuyexe_id', $chuyexe_id)
            ->get();
        return view('backend.chuyenXe.edit') 
            ->with('xe', $xe)
            ->with('lotrinh', $lotrinh)
            ->with('chuyenxe', $chuyenxe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $chuyexe_id)
    {
        $chuyenxe = ChuyenXe::find($chuyexe_id);
        $input = $request->all();
        $chuyenxe->update($input);
        return redirect('chuyenxe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($chuyexe_id)
    {
        ChuyenXe::destroy($chuyexe_id);
        return redirect('chuyenxe');
    }
    public function khach($chuyexe_id){
        $khach = DB::table('user')
            ->join('ve', 'user.user_id', '=', 've.user_id')
            ->join('chuyen_xe', 'chuyen_xe.chuyexe_id' , '=', 've.chuyexe_id')
            ->join('xe', 'xe.xe_id', '=', 'chuyen_xe.xe_id')
            ->join('lo_trinh','lo_trinh.lotrinh_id', '=', 'chuyen_xe.lotrinh_id')
            ->select('chuyen_xe.*', 'xe.*', 'lo_trinh.*','user.*', 've.*')
            ->where('chuyen_xe.chuyexe_id', $chuyexe_id)
            ->get();
        $time = DB::table('chuyen_xe')
            ->join('ve', 'chuyen_xe.chuyexe_id' , '=', 've.chuyexe_id')
            ->join('xe', 'xe.xe_id', '=', 'chuyen_xe.xe_id')
            ->join('lo_trinh','lo_trinh.lotrinh_id', '=', 'chuyen_xe.lotrinh_id')
            ->select('chuyen_xe.*', 'xe.*', 'lo_trinh.*', 've.*')
            ->where('chuyen_xe.chuyexe_id', $chuyexe_id)
            ->limit(1)
            ->get();

        return view('backend.chuyenXe.khach')
        ->with('khach', $khach)
        ->with('time', $time);
    }
}