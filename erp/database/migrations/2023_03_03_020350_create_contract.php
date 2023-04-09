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
        Schema::create('contract', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contract_type');
            $table->foreignId('company_id');
            $table->string('contract_number')->nullable();
            $table->string('contract_date')->nullable();
            $table->foreignId('buyer_category');
            $table->foreignId('buyer_id');
            $table->foreignId('buyer_country');
            $table->string('trading_currency')->nullable();
            $table->float('exchange_rate', 8, 2)->nullable();
            $table->boolean('sps_status');
            $table->text('buyer_address')->nullable();
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
        Schema::dropIfExists('contract');
    }
};
