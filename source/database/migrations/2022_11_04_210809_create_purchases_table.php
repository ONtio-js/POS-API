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
        Schema::create('purchases', function (Blueprint $table) {
            $table->uuid(column:'id');
            $table->string(column:'customer_id');
            $table->integer(column:'quantity');
            $table->string(column:'items',length:100);
            $table->string(column:'price',length:30);
            $table->time(column:'time',precision:0.0);
            $table->date(column:'created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
};