<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
//2-9-22 Adding ways to interact with the cars table
    protected $table = 'cars';
    protected $primaryKey = 'id';
    //Had to make this public or it threw errors
    public $timestamps = true;

    //2-11-22 Create a new property, make it fillable, define the array
    //from the CarsController
    protected $fillable = ['name', 'founded', 'description'];
    //2-14-22 Hide attributes that get passed in a JSON object
   // protected $hidden = ['updated_at'];
   //2-15-22 Create our methods to return the car models from the cars table
   public function carModel() 
   {
        return $this->hasMany(CarModel::class);
   }

    
}
