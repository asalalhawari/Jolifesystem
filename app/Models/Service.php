<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id', 'name', 'hosted_by_us', 'host_name', 'description', 'login'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
