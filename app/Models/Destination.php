<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = ['name'];

    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}
