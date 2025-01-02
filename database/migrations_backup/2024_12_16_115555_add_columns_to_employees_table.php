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
        Schema::table('employees', function (Blueprint $table) {
            $table->string('phone');
        $table->string('address');
        $table->string('contract_type');
        $table->date('start_date');
        $table->date('end_date')->nullable();
        $table->decimal('financial_dues', 10, 2);
        $table->string('attachment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('contract_type');
            $table->dropColumn('start_date');
            $table->dropColumn('end_date');
            $table->dropColumn('financial_dues');
            $table->dropColumn('attachment');
        });
    }
};
