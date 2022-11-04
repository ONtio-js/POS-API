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
            $table->uuid('id');
            $table->string(column:'customer_name');
            $table->string(column:'customer_email');
            $table->string(column:'customer_address_country');
            $table->string(column:'customer_address_state');
            $table->string(column:'customer_address_city');
            $table->string(column:'postalcode');
            $table->string(column:'customer_marital_status');
            $table->string(column:'')
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
        Schema::dropIfExists('customers');
    }
};
