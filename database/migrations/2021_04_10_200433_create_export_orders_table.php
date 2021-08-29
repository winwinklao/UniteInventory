<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExportOrdersTable extends Migration
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
            $table->date('requestDate');
            $table->date('requireDate');
            $table->integer('user_id');
            $table->string('cus_name');
            $table->string('tel');
            $table->string('shippedAddress');
            $table->integer('transport_id');
            $table->float('total');
            $table->date('shippedDate');
            $table->boolean('status');
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
