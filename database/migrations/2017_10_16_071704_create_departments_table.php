<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Department;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        
        Department::create([
            'name'=>'E-Commerce',
        ]);
        Department::create([
            'name'=>'Executive',
        ]);
        Department::create([
            'name'=>'Marketing',
        ]);
        Department::create([
            'name'=>'Purchasing',
        ]);
        Department::create([
            'name'=>'Warehouse',
        ]);
        Department::create([
            'name'=>'Logistic',
        ]);
        Department::create([
            'name'=>'General Service',
        ]);
        Department::create([
            'name'=>'Audit',
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
