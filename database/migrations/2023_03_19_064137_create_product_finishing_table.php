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
        Schema::create('product_finishing', function (Blueprint $table) {
            $table->id();
            $table->foreignId('finishing_id')->nullable()->index('fk_product_finishing_to_finishing');
            $table->foreignId('product_id')->nullable()->index('fk_product_finishing_to_products');
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
        Schema::dropIfExists('product_finishing');
    }
};
