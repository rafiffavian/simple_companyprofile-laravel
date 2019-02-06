<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateListmenu2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listmenu', function (Blueprint $table) {
            $table->bigInteger('id_user')->nullable()->unsigned();

            $table->foreign('id_user')
            ->references('id')
            ->on('users')
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
