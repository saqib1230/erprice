<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProformaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proforma_models', function (Blueprint $table) {
           
            $table->timestamps();

            $table->bigIncrements('id');


            $table->string('pro_special_code');
          
            $table->date('debitnote_date');
            $table->string('contact');
            $table->string('buyer');
            $table->string('buyer_address');
            $table->string('subject');
            $table->string('contact_ref_no');
            $table->float('adv_amount');
            $table->string('currency');
            $table->string('amount_in_word');
            $table->string('note');







        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proforma_models');
    }
}
