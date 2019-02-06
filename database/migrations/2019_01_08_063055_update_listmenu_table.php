<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateListmenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('listmenu', function (Blueprint $table) {
           
        });
        Schema::create('listmenu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_menu')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->bigInteger('price');
            $table->timestamps();

            $table->foreign('id_menu')
            ->references('id')
            ->on('menu')
            ->onUpdate('cascade')
            ->onDelete('cascade');


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
}
