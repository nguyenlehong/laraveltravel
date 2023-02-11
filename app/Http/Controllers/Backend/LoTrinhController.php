<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoTrinh;
use Illuminate\Support\Facades\Redirect;

use Session;
Session_start();
class LoTrinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lotrinh = LoTrinh::all();
        return view('backend.loTrinh.listLoTrinh')->with('lotrinh', $lotrinh);
    }

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
        LoTrinh::create($input);
        Session::put('message_lichtrinh', 'lt');
        return redirect('lotrinh');
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
    public function edit($lotrinh_id)
    {
        $lotrinh = LoTrinh::find($lotrinh_id);
        return view('backend.loTrinh.edit')->with('lt', $lotrinh);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lotrinh_id)
    {
        $lotrinh = LoTrinh::find($lotrinh_id);
        $input = $request->all();
        $lotrinh->update($input);
        return redirect('lotrinh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($lotrinh_id)
    {
        LoTrinh::destroy($lotrinh_id);
        return redirect('lotrinh');

    }
}