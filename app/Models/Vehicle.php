<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    protected $primaryKey = 'vehicle_id';

    public $timestamps = false;

    protected $fiillable = [
        'vehicle_name',
        'rent_expense',
    ];


    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class, 'vehicle_type_id', 'vehicle_type_id');
    }
}
