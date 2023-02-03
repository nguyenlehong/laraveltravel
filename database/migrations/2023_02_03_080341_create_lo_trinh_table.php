<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lo_trinh', function (Blueprint $table) {
            $table->increments('lotrinh_id');
            $table->text('noi_bat_dau');
            $table->text('noi_ket_thuc'); 
            $table->integer('thoi_gian'); 
            $table->integer('gia'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lo_trinh');
    }
};