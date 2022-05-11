<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_book', function (Blueprint $table) {
            $table->Increments('book_id');
            $table->integer('product_id');
            $table->date('book_nd');
            $table->date('book_nv');
            $table->integer('book_sn');
            $table->float('book_gnp');
            $table->text('book_ht');
            $table->text('book_em');
            $table->integer('book_sdt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_book');
    }
}
