<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cliente extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function localidad(): BelongsTo{
        return $this->belongsTo(Localidad::class);
    }
    
    public function zona(): BelongsTo{
        return $this->belongsTo(Zona::class);
    }
}
