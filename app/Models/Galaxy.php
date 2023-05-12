<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galaxy extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'size', 'image_url'];

    public function spaceStations()
    {
        return $this->hasMany(SpaceStation::class);
    }
}
