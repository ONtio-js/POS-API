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
        Schema::create('product_details', function (Blueprint $table) {
            $table->uuid(column:'id');
            $table->string(column:'quantity');
            $table->string(column:'category');
            $table->string(column:'item',length:20);
            $table->string(column:'costprice');
            $table->string(column:'sellingprice');
            $table->string(column:'totalcost');
            $table->string(column:'supplier');
            $table->string(column:'supplier_address');
            $table->string(column:'supplier_phone');
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
        Schema::dropIfExists('product_details');
    }
};
