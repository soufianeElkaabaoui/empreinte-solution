<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Formation extends Model
{
    use HasFactory;

    function formationCategory() : BelongsTo {
        return $this->belongsTo(FormationCategory::class);
    }
    function formationPrograms() : HasMany {
        return $this->hasMany(FormationProgram::class);
    }
    function formationGalleries() : HasMany {
        return $this->hasMany(FormationGallery::class);
    }
}
