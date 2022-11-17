<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->string('country_id');
            $table->string('name');
            $table->string('company_name');
            $table->string('position');
            $table->string('phone');
            $table->string('email');
            $table->string('bill_of_lading');
            $table->string('commercial_invoice');
            $table->string('freight_invoice');
            $table->string('declaration');
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
        Schema::dropIfExists('forms');
    }
}
