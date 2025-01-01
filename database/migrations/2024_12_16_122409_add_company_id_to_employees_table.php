<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyIdToEmployeesTable extends Migration
{
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            // التأكد من عدم وجود العمود بالفعل قبل إضافته
            if (!Schema::hasColumn('employees', 'company_id')) {
                $table->foreignId('company_id')->constrained()->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign(['company_id']); // حذف العلاقة
            $table->dropColumn('company_id'); // حذف العمود
        });
    }
}
