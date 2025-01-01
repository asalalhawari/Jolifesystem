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
            $table->string('project_name');
            $table->text('project_description');
            $table->decimal('contract_value', 15, 2);
            $table->integer('client_id')->nullable();
           
            $table->string('domain_name')->nullable();
            $table->boolean('domain_reserved_by_us')->default(false);
            $table->date('domain_start_date')->nullable();
            $table->date('domain_end_date')->nullable();
            $table->string('domain_company')->nullable();
            $table->text('domain_credentials')->nullable();
            
            $table->boolean('hosting_reserved_by_us')->default(false);
            $table->date('hosting_start_date')->nullable();
            $table->date('hosting_end_date')->nullable();
            $table->string('hosting_company')->nullable();
            $table->text('hosting_credentials')->nullable();
            
            $table->boolean('has_maintenance_contract')->default(false);
            $table->date('maintenance_start_date')->nullable();
            $table->date('maintenance_end_date')->nullable();
            
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
