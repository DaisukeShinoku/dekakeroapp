<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $primaryKey = "course_id";
    public $incrementing = false;

    public function favorites(){
        return $this->hasMany(Favorite::class, "course_id");
   }

    public function place(){
        return $this->belongsTo(Place::class, "place_id");
    }
}
