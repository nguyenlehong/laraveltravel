<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;;

class CarController extends Controller
{
    public function list_car()
    {
        return view('backend.car.listCar');
    }
    public function list_tuyenxe(){
        return view('backend.tuyenXe.listTuyenXe');
    }
    public function list_lichChay(){
        return view('backend.lichChay.listLichChay');
    }
}