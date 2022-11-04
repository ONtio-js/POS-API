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
        Schema::create('sales', function (Blueprint $table) {
            $table->uuid(column:'id');
            $table->integer(column:'quantity');
            $table->string(column:'items',length:100);
            $table->string(column:'store',length:30);
            $table->string(column:'attendant',length:30);
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
        Schema::dropIfExists('sales');
    }
};
