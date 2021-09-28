<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start');
            $table->dateTime('end');
            $table->text('saloon', 50);
            $table->text('file', 144);
            $table->text('applicant', 100);
            $table->text('crime', 100);
            $table->text('trial', 150);
            $table->text('judge', 75);
            $table->text('fiscal', 75);
            $table->text('defender', 75);
            $table->text('secretary',75);
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
        Schema::dropIfExists('events');
    }
}
