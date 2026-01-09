<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\Itinerary;
use App\Models\User;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::pluck('id')->toArray();
        $itineraries = Itinerary::pluck('id')->toArray();

        foreach ($itineraries as $itineraryId) {
            Review::create([
                'itinerary_id' => $itineraryId,
                'user_id' => $users[array_rand($users)],
                'rating' => rand(3,5),
                'comment' => 'This itinerary was very helpful and well structured. Would recommend to other travellers.',
            ]);
        }
    }
}
