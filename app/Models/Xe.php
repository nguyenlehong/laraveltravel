<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xe extends Model
{
    use HasFactory;
    protected $table = 'xe';
    protected $primaryKey = 'xe_id';
    protected $fillable = ['so_xe','bien_so','so_luong_ghe','ghi_chu'];
}