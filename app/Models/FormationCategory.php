<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FormationCategory extends Model
{
    use HasFactory;

    function formations() : HasMany {
        return $this->hasMany(Formation::class);
    }
}
