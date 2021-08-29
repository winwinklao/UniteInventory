<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaidToImportProductOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('import_product_orders', function (Blueprint $table) {
            // $table->boolean('success')->nullable();
            // $table->integer('qty_history')->nullable();
            $table->integer('use_area')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('import_product_orders', function (Blueprint $table) {
            //
        });
    }
}
