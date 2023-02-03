<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;
use App\Models\Xe;
use Illuminate\Support\Facades\Redirect;


class XeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xe = Xe::all();
        return view('backend.car.listCar')->with('xe', $xe);
        
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
        $input = $request ->all();
        Xe::create($input);
        return redirect('list-xe');
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
    public function edit($xe_id)
    {
       
        $xe = Xe::find($xe_id);
        return view('backend.car.editCar')->with('xe', $xe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $xe_id)
    {
        $xe = Xe::find($xe_id);
        $input = $request->all();
        $xe->update($input);
        return redirect('list-xe');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($xe_id)
    {
        Xe::destroy($xe_id);
        return redirect('list-xe');

    }
}