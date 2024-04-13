<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('crud', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('salary');
            $table->integer('emp_id');
           

            $table->timestamps(); //
         
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crud');
        
    }
};
