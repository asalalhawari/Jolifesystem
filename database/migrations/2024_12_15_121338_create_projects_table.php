<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('contract_value', 15, 2);
            $table->text('project_description');
            
            $table->integer('client_id')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            
            $table->text('additional_details')->nullable(); 
            $table->timestamps();
        });
        
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
