<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['name', 'available_beds', 'created_id', 'updated_id'])]
class Room extends Model
{
    use HasFactory;
    
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_id');
    }
}
