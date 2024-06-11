<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'serial_number',
        'status',
        'purchase_date',
        'warranty_end_date',
    ];

    public function transactions()
    {
        return $this->hasMany(EquipmentTransaction::class);
    }

    public function requestEquipments()
    {
        return $this->hasMany(RequestEquipment::class);
    }
}
