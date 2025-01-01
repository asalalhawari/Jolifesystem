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
        Schema::table('expenses', function (Blueprint $table) {
            $table->string('expense_type'); 
            $table->decimal('amount', 10, 2); 
            $table->string('type');          $table->text('notes')->nullable(); 
            $table->string('attachment')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->dropColumn('expense_type');
            $table->dropColumn('amount');
            
            $table->dropColumn('notes');
            $table->dropColumn('attachment');
        });
    }
};
