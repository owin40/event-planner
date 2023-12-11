<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class nyobainIsiCRUD extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('dataUser', function (Blueprint $table){
            $table->$id();
            $table->string('nama', 100);
            $table->int('NHP', 16);
            $table->date('tglPembuatan');
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
        //
    }

};
