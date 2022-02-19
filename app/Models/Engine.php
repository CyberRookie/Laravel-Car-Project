<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
    use HasFactory;
//2-18-22 Defining the model
    protected $table = 'engines';
    protected $primaryKey = 'id';
//2-18-22 Defining the class it belongs to, Maybe CarModel?
    /* public function car() */
    /* { */
    /*     return $this->belongsTo(Car::class); */
    /* } */

}
