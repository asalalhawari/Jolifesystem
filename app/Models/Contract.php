<?php
 namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'start_date', 'end_date', 'type']; 

    public function employee()
{
    return $this->belongsTo(Employee::class);
}
}
