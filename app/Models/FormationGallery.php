<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormationGallery extends Model
{
    use HasFactory;

    function formation() : BelongsTo {
        return $this->belongsTo(Formation::class);
    }
}
