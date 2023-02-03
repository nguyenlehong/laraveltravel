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
        Schema::create('chuyen_xe', function (Blueprint $table) {
            $table->increments('chuyexe_id');
            $table->integer('lotrinh_id');
            $table->integer('xe_id');
            $table->date('ngay');
            $table->integer('gio'); //time
            $table->text('trang_thai');
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
        Schema::dropIfExists('chuyen_xe');
    }
};