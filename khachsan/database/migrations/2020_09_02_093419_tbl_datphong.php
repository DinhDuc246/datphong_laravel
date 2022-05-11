<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDatphong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_datphong', function (Blueprint $table) {
            $table->Increments('datphong_id');
            $table->string('datphong_sn');
            $table->string('datphong_tks');
            $table->string('datphong_cid');
            $table->string('datphong_cod');
            $table->string('datphong_tg');
            $table->string('datphong_hvt');
            $table->string('datphong_sdt');
            $table->string('datphong_e');
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
        Schema::dropIfExists('tbl_datphong');
    }
}
