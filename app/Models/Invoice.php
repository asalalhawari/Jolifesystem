<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['company_id', 'amount', 'status'];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
    
public function client(){
    return $this->belongsTo(Client::class);
}
public function company()
{
    return $this->belongsTo(Company::class);
}

}
