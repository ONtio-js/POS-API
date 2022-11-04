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
        Schema::create('adminstrators', function (Blueprint $table) {
            $table->uuid(column:'id');
            $table->string(column:'email',length:50);
            $table->string(column:'password',length:255);
            $table->string(column:'firstname',length:30);
            $table->string(column:'lastname',length:30);
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
        Schema::dropIfExists('adminstrators');
    }
};
