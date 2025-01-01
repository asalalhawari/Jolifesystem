<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'project_description',
        'contract_value',
        'domain_name',
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
        'maintenance_start_date',
        'maintenance_end_date',
        'additional_details',
        'domain_reserved_by_us',
        'domain_company',
        'domain_credentials ',
        ' hosting_company',
        'domain_start_date',
        'domain_end_date',
        'name', 
        'description'
    ];
    
    public function services()
    {
        return $this->hasMany(Service::class);
    }
public function client(){
    return $this->belongsTo(Client::class);
}
public function employees()
{
    return $this->belongsToMany(Employee::class, 'employee_project');
}


}
