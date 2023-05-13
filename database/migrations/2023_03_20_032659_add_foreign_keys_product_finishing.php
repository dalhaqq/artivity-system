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
        Schema::table('product_finishing', function (Blueprint $table) {
            $table->foreign('finishing_id', 'fk_product_finishing_to_finishing')->references('id')->on('finishing')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id', 'fk_product_finishing_to_products')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_finishing', function (Blueprint $table) {
            $table->dropForeign('fk_product_finishing_to_products');
            $table->dropForeign('fk_product_finishing_to_finishing');
        });
    }
};
