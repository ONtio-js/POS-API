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
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid(column:'id');
            $table->string(column:'fullname',length:100);
            $table->string(column:'email',length:50);
            $table->string(column:'phone',length:16);
            $table->string(column:'country',length:20);
            $table->string(column:'state',length:20);
            $table->string(column:'street',length:20);
            $table->string(column:'postalcode',length:10);
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
        Schema::dropIfExists('customers');
    }
};
