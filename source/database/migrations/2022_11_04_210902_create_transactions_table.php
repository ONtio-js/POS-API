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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid(column:'id');
            $table->string(column:'payment_id');
            $table->enum(column:'payment_status',allowed:['success','fail']);
            $table->string(column:'items_id');
            $table->string(column:'quantity');
            $table->string(column:'attendant',length:20);
            $table->time(column:'time');
            $table->timestamp(column:'created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
