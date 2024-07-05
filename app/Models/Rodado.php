<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rodado extends Model
{
    use HasFactory;

    protected $guarded=[];
    public function proveedor(): BelongsTo{
        return $this->belongsTo(Proveedor::class);
    }
}
