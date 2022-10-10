<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    /**
     * Get the social media for this member.
     */
    public function social_links()
    {
        return $this->hasMany(Social_link::class);
    }
}
