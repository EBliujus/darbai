<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Manager;

class Specie extends Model
{
    use HasFactory;
    protected $fillable = ['type'];


    public function getManager()
    {
        return $this->belongsTo(Manager::class, 'manager_id', 'id');
    }
}
