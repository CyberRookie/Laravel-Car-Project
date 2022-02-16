<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    //2-15-22 8:15 minutes in Add our associations to the Car model and interact with the db table
    protected $table = 'car_models';
    protected $primaryKey = 'id';
    //Add the name we want it to be associated with, car model belongs to a car
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

}
