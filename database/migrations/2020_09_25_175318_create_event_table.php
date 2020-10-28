<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            
            $table->id();
            $table->string('EventCordinator');
            $table->string('EventName');
            $table->string('Eventplace');
            $table->string('EventCordinatorEmail');
            $table->string('EventDescription');
            $table->string('EventTime');
            $table->string('EventPoster');
            $table->string('EventType');
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
        Schema::dropIfExists('event');
    }
}
