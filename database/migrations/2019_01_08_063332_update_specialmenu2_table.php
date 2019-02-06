<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSpecialmenu2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('specialmenu', function (Blueprint $table) {
        });

        Schema::create('specialmenu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_listmenu')->unsigned();
            $table->string('name');
            $table->string('file');
            $table->text('description');
            $table->timestamps();

            $table->foreign('id_listmenu')
            ->references('id')
            ->on('listmenu')
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
