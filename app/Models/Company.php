<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'activity', 'payment_status'];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
    public function setPaymentStatusAttribute($value)
    {
        $this->attributes['payment_status'] = $value === 'paid' ? 1 : 0;
    }
public function employees()
{
    return $this->hasMany(Employee::class);
}


}
