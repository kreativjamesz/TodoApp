<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('from_department_id')->unsigned();
            $table->integer('to_department_id')->unsigned();
            $table->string('request_by');
            $table->string('request_type');
            $table->string('urgency_type');
            $table->date('due_date');
            $table->string('item_request_code');
            $table->text('item_request_desc');
            $table->integer('quantity');
            $table->integer('status_id')->unsigned()->default(1);
            $table->string('recieved_by')->nullable();
            $table->date('recieved_date')->nullable();
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
        Schema::dropIfExists('requests');
    }
}
