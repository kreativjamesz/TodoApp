<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Status;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Status::create([
            'name'=>'Pending'
        ]);
        Status::create([
            'name'=>'On Process'
        ]);
        Status::create([
            'name'=>'Delivered'
        ]);
        Status::create([
            'name'=>'Recieved'
        ]);
        Status::create([
            'name'=>'Done'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }
}
