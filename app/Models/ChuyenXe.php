<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuyenXe extends Model
{
    use HasFactory;
    protected $table = 'chuyen_xe';
    protected $primaryKey = 'chuyenxe_id';
    protected $fillable = ['lotrinh_id','xe_id','ngay','gio','trang_thai'];
}