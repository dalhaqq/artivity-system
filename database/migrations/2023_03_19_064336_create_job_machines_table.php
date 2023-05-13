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
        Schema::create('job_machines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->nullable()->index('fk_job_machines_to_jobs');
            $table->foreignId('mesin_id')->nullable()->index('fk_job_machines_to_machines');
            $table->softDeletes();
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
        Schema::dropIfExists('job_machines');
    }
};
