<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\RequestType;

class CreateRequestTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        RequestType::create([
            'name'=>'Graphic Layout'
        ]);
        RequestType::create([
            'name'=>'Fabric'
        ]);
        RequestType::create([
            'name'=>'Purchase'
        ]);
        RequestType::create([
            'name'=>'Supplies'
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_types');
    }
}
