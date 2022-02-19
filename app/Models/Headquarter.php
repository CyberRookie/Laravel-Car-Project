<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headquarter extends Model
{
    use HasFactory;
//2-17-22 Define a inverse one-to-one relationship
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

}
