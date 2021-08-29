<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExportOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('export_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('requestDate',);
            $table->date('requireDate');
            $table->string('cus_name');
            $table->string('tel');
            $table->integer('transportId');
            $table->date('shippedAddress');
            $table->date('shippedDate');
            $table->integer('total_price');
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
        Schema::dropIfExists('export_orders');
    }
}
