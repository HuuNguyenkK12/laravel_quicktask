<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('vehicle_id');
            $table->unsignedInteger('vehicle_type_id');
            $table->foreign('vehicle_type_id')
                  ->references('vehicle_type_id')
                  ->on('vehicle_types')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->string('license_plate', 15)->nullable();
            $table->string('vehicle_name', 100);
            $table->tinyInteger('vehicle_state')->default(0);
            $table->text('description')->nullable();
            $table->decimal('rent_expense', 10, 2);
            $table->string('image', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
