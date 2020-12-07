<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    public $table = 'vehicle_types';

    protected $primaryKey = 'vehicle_type_id';

    public $timestamps = false;

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'vehicle_type_id','vehicle_type_id');
    }
}
