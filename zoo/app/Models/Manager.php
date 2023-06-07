<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname'];

    public function product()
    {
        return $this->hasMany(Specie::class, 'specie_id', 'id');
    }
}
