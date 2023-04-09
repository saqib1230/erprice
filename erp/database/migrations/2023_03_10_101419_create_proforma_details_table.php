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
        Schema::create('proforma_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proforma_id');
            $table->foreignId('item_id');
            $table->string('origin')->nullable();
            $table->string('packing')->nullable();
            $table->float('quantity', 8, 2)->nullable();
            $table->float('unit_price', 8, 2)->nullable();
            $table->float('actual_price', 8, 2)->nullable();
            $table->float('total_amount', 8, 2)->nullable();
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
        // Schema::dropIfExists('proforma_details', function (Blueprint $table) {
      Schema::dropIfExists('proforma_details');
    
    }
};
