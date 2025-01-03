<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ZeeshanTariq\FilamentAttachmate\Core\InteractsWithAttachments;

class Employee extends Model
{
    use InteractsWithAttachments;

    protected $fillable = ['name', 'phone', 'address', 'contract_type', 'start_date', 'end_date', 'financial_dues' ,'national_id'];

public function company()
{
    return $this->belongsTo(Client::class, 'company_id');
}
public function projects()
{
    return $this->belongsToMany(Project::class, 'employee_project');}


    public function contracts()
{
    return $this->hasMany(Contract::class);
}

}
