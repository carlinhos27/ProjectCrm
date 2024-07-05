<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Localidad extends Model
{
    use HasFactory;

    protected $guarded =[];
    public function provincia(): BelongsTo{
        return $this->belongsTo(Provincia::class);
    }

    public function clientes(): HasMany{
        return $this->hasMany(Cliente::class);
    }
}
