<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMeterPointsPartnersPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meter_points_partners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('meter_points_id')->index();
            $table->foreign('meter_points_id')->references('id')->on('meter_points')->onDelete('cascade');
            $table->unsignedBigInteger('partners_id')->index();
            $table->foreign('partners_id')->references('id')->on('partners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meter_points_partners');
    }
}
