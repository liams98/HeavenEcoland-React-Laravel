<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBundleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bundle', function (Blueprint $table) {  
            $table->bigIncrements('id');

            $table->string('name', 255)->nullable();
            $table->bigInteger('bundle_id')->nullable();
            $table->bigInteger('price')->nullable();

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
        Schema::dropIfExists('bundle');
    }
}
