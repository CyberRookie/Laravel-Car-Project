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

    
}
