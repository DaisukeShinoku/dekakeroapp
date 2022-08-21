<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $primaryKey = "place_id";
    public $incrementing = false;

    public function courses(){
        return $this->hasMany(Course::class, "place_id");
   }
}
