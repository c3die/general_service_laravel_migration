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
        //
        Schema::create('repair_requests', function (Blueprint $table) {
            $table->id();
            $table->string('requested_parties');  
            $table->date('date_requested');
            $table->time('time_requested');
            $table->string('types');
            $table->string('vehicles')->nullable();
            $table->string('colors')->nullable();
            $table->string('plate_number')->nullable();
            $table->string('services')->nullable();
            $table->string('repair_for')->nullable();
            $table->string('status');
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
        //
    }
};
