<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ZeeshanTariq\FilamentAttachmate\Core\InteractsWithAttachments;

class Client extends Model
{
    use InteractsWithAttachments;
    protected $fillable = [
        'name',
        'contact_person',
        'email',
        'phone',
        'address',
        'secondary_phone',
        'authorized_person'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'company_id');

    }
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function contacts(){
        return $this->hasMany(Contact::class);
    }

}