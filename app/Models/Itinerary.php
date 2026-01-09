<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class Itinerary extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'itineraries';

    // Fields that can be filled through forms
    protected $fillable = [
        'trip_name',
        'country',
        'destinations',
        'overview',
        'suggested_dates',
        'difficulty_level',
        'submitted_by',
        'user_id',
    ];

    /**
     * Relationship: One Itinerary has MANY Reviews
     * This allows $itinerary->reviews to fetch all reviews
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

}
