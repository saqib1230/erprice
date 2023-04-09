<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DnModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('dn_note');
            $table->string('dn_special_id');
            $table->string('ref_no');
            $table->date('dn_date');
            $table->string('consignee');
            $table->string('consign_address');
            $table->string('commodity');
            $table->integer('net_qty');
            $table->integer('gross_qty');
            $table->integer('no_bag');
            $table->string('port_loading');
            $table->string('port_discharge');
            $table->string('dn_id');
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
        Schema::dropIfExists('dn_models');
    }
}
