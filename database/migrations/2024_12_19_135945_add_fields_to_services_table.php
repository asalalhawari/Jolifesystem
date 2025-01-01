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
        Schema::table('services', function (Blueprint $table) {
            // $table->unsignedBigInteger('project_id')->nullable()->after('id');
            // $table->string('name')->after('project_id');
            // $table->boolean('hosted_by_us')->default(false)->after('name');
            // $table->string('host_name')->nullable()->after('hosted_by_us');
            // $table->text('description')->nullable()->after('host_name');
            // $table->string('login')->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['project_id', 'name', 'hosted_by_us', 'host_name', 'description', 'login']);

        });
    }
};
