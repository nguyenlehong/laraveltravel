<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoTrinh extends Model
{
    use HasFactory;
    protected $table = 'lo_trinh';
    protected $primaryKey = 'lotrinh_id';
    protected $fillable = ['noi_bat_dau','noi_ket_thuc','thoi_gian','gia'];
}