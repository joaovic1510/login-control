<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login-datas', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('name_user');
            $table->timestamps('login');
            $table->timestamps('logout');
            $table->date('date');
            $table->timestamps();
            $table->foreign('id')->references('id')->on('list_employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login-datas');
    }
}
