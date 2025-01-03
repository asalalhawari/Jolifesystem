<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ZeeshanTariq\FilamentAttachmate\Core\InteractsWithAttachments;

class Project extends Model
{
    use InteractsWithAttachments;

    protected $fillable = [
        'name',
        'project_description',
        'contract_value',
        'start_date',
        'end_date',
        'additional_details'
    
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
