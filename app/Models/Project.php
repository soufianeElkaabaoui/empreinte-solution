<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    /**
     * Get the service that owns this project.
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
