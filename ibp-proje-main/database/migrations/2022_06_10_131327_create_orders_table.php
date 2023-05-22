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
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('product_id');
            $table->string('name',20);
            $table->string('email',50);
            $table->string('phone',20);
            $table->date('StartDate');
            $table->date('FinishDate');
            $table->integer('months');
            $table->integer('price');
            $table->string('IP',20);
            $table->string('note',150)->nullable();
            $table->string('status',30)->default('New');
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
        Schema::dropIfExists('orders');
    }
};
