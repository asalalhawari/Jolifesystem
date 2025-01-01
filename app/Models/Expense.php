<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'expense_type',   
        'amount',         
        'notes',          
        'attachment',  ];
        
public function company()
{
    return $this->belongsTo(Company::class);
}

}

