<?php

use App\Models\cars;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\MySqlSchemaState;
use Illuminate\Support\Facades\Schema;
use League\Config\SchemaBuilderInterface;
use Nette\Schema\Schema as SchemaSchema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::class('rent-a-car', function (Blueprint $cars) {
        $cars->id();
        $cars->string('registration_license');
        $cars->string('brand');
        $cars->string('model')->nullable();
        $cars->string('manufacture_date');
        $cars->string('description');
        $cars->id('category_id');
        $cars->string('properties');

        


    });
    }


    
};
