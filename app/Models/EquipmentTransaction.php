<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'equipment_id',
        'type',
        'date',
        'note',
    ];

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}
