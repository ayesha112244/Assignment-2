<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'destination_id',
        'description',
        'language',
        'capital',
        'currency',
        'population',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function itineraries()
    {
        return $this->hasMany(Itinerary::class);
    }
}
