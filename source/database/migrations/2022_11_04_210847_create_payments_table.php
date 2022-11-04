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
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid(column:'id');
            $table->integer(column:'quantity');
            $table->string(column:'items',length:20);
            $table->string(column:'priceperunit');
            $table->string(column:'totalprice');
            $table->string(column:'discount');
            $table->enum(column:'status',allowed:['completed','processing','failed']);
            $table->time(column:'time',precision:0.0);
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
