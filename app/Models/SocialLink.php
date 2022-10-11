<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    use HasFactory;

    /**
     * Get the member that owns this social media.
     */
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}