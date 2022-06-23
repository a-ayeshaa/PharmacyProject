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
        Schema::create('medicine', function (Blueprint $table) {
            $table->integer('med_id');
            $table->string('med_name');
            $table->integer('price_perUnit');
            $table->date('manufacturingDate');
            $table->date('exiryDate');
            $table->integer('vendor_id');
            $table->string('vendor_name')->unique();
            $table->integer('contract_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicine');
    }
};
