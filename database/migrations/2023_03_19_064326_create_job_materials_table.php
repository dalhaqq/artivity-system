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
        Schema::create('job_materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->nullable()->index('fk_job_materials_to_jobs');
            $table->foreignId('stock_id')->nullable()->index('fk_job_materials_to_machines');
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
        Schema::dropIfExists('job_materials');
    }
};
