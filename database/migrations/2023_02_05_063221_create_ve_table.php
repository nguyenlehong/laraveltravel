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
        Schema::create('ve', function (Blueprint $table) {
            $table->increments('ve_id');
            $table->integer('user_id');
            $table->integer('chuyexe_id');
            $table->text('ten_user');
            $table->integer('sdt');
            $table->integer('so_luong_ghe_dat');
            $table->integer('tong_tien');
            $table->text('diem_dn');
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
        Schema::dropIfExists('ve');
    }
};