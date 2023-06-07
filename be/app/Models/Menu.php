<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'restaurant_id'];

    public function  MeniubyRestaurant()
    {
         return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
    
}
