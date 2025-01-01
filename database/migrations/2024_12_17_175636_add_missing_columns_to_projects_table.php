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
        Schema::table('projects', function (Blueprint $table) {
           

    

            // $table->boolean('has_maintenance_contract')->default(false)->nullable();
            // $table->text('additional_details')->nullable();
            // $table->string('hosting_credentials')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'domain_reserved_by_us',
                'domain_start_date',
                'domain_end_date',
                'domain_company',
                'domain_credentials',
                'hosting_reserved_by_us',
                'hosting_start_date',
                'hosting_end_date',
                'hosting_company',
                'hosting_credentials',
                'has_maintenance_contract',
                'additional_details',
            ]);
        });
    }
};
