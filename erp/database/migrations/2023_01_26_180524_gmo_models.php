<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GmoModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gmo_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('gmo_note');
            $table->string('gmo_special_id');
            $table->string('ref_no');
            $table->date('gmo_date');
            $table->string('consignee');
            $table->string('consign_address');
            $table->string('commodity');
            $table->integer('net_qty');
            $table->integer('gross_qty');
            $table->integer('no_bag');
            $table->string('port_loading');
            $table->string('port_discharge');
            $table->string('gmo_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
     
         
          
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gmo_models');
    }
}
