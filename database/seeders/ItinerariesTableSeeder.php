<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use Illuminate\Support\Facades\DB;

class ItinerariesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('itineraries')->insert([

            // 🇦🇹 AUSTRIA (3 itineraries)

            [
                'trip_name' => 'Vienna & Salzburg Cultural Escape',
                'country_id' => Country::where('name', 'Austria')->value('id'),
                'destinations' => 'Vienna, Salzburg',
                'overview' => 'This 4-day itinerary explores Austria’s imperial past and musical heritage. Begin in Vienna with grand palaces, classical concerts, and historic cafés. Continue to Salzburg, Mozart’s birthplace, where baroque architecture, alpine views, and charming old towns create a magical experience.',
                'suggested_dates' => 'April - September',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Ayesha Sohail',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Austrian Alps Nature Retreat',
                'country_id' => Country::where('name', 'Austria')->value('id'),
                'destinations' => 'Innsbruck, Hallstatt',
                'overview' => 'A peaceful 3-day nature-focused trip through the Austrian Alps. Explore Innsbruck’s mountain views, then relax in Hallstatt’s lakeside village. Ideal for travellers who enjoy scenic walks, photography, and quiet alpine landscapes.',
                'suggested_dates' => 'May - October',
                'difficulty_level' => 'Medium',
                'submitted_by' => 'Emma Johnson',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Historic Austria Weekend Tour',
                'country_id' => Country::where('name', 'Austria')->value('id'),
                'destinations' => 'Vienna',
                'overview' => 'This 2-day city break is perfect for short stays. Visit Schönbrunn Palace, St. Stephen’s Cathedral, and enjoy evening walks through Vienna’s old town. A compact yet enriching cultural experience.',
                'suggested_dates' => 'All year',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Oliver Smith',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 🇧🇪 BELGIUM (3)

            [
                'trip_name' => 'Belgium Medieval Cities Tour',
                'country_id' => Country::where('name', 'Belgium')->value('id'),
                'destinations' => 'Brussels, Bruges, Ghent',
                'overview' => 'This 4-day journey explores Belgium’s medieval heart. Discover Brussels’ grand squares, Bruges’ romantic canals, and Ghent’s historic charm. Food lovers will enjoy waffles, chocolate, and local cafés throughout the trip.',
                'suggested_dates' => 'March - October',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Isabella Rossi',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Belgium Art & Culture Escape',
                'country_id' => Country::where('name', 'Belgium')->value('id'),
                'destinations' => 'Antwerp, Brussels',
                'overview' => 'A 3-day itinerary focused on Belgian art, museums, and historic streets. Ideal for culture lovers who enjoy galleries, architecture, and slow city exploration.',
                'suggested_dates' => 'April - September',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Michael Brown',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Belgium Chocolate & Beer Trail',
                'country_id' => Country::where('name', 'Belgium')->value('id'),
                'destinations' => 'Brussels, Leuven',
                'overview' => 'A fun 2-day themed itinerary exploring Belgium’s famous chocolate shops and traditional breweries. Short, sweet, and perfect for weekend travellers.',
                'suggested_dates' => 'All year',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Fatima Celik',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 🇧🇦 BOSNIA (3)

            [
                'trip_name' => 'Discover Bosnia’s Cultural Heritage',
                'country_id' => Country::where('name', 'Bosnia & Herzegovina')->value('id'),
                'destinations' => 'Sarajevo, Mostar',
                'overview' => 'A 4-day trip exploring Bosnia’s diverse history, Ottoman architecture, and scenic rivers. Highlights include Mostar’s iconic bridge and Sarajevo’s historic old town.',
                'suggested_dates' => 'May - September',
                'difficulty_level' => 'Medium',
                'submitted_by' => 'Ahmed Saud',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Bosnia Nature & History Tour',
                'country_id' => Country::where('name', 'Bosnia & Herzegovina')->value('id'),
                'destinations' => 'Blagaj, Kravice Falls',
                'overview' => 'This 3-day itinerary focuses on Bosnia’s natural beauty, waterfalls, and historical monasteries. Ideal for relaxed exploration.',
                'suggested_dates' => 'June - August',
                'difficulty_level' => 'Medium',
                'submitted_by' => 'Emily Carter',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Sarajevo City Break',
                'country_id' => Country::where('name', 'Bosnia & Herzegovina')->value('id'),
                'destinations' => 'Sarajevo',
                'overview' => 'A compact 2-day itinerary exploring Sarajevo’s markets, mosques, and museums while learning about its unique history.',
                'suggested_dates' => 'All year',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Liam Wilson',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 🇭🇷 CROATIA (3)

            [
                'trip_name' => 'Croatia Coastal Adventure',
                'country_id' => Country::where('name', 'Croatia')->value('id'),
                'destinations' => 'Dubrovnik, Split',
                'overview' => 'A 4-day coastal journey exploring Croatia’s historic seaside cities, crystal-clear waters, and ancient city walls.',
                'suggested_dates' => 'May - September',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Napat Ratanakorn',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Croatian Islands Explorer',
                'country_id' => Country::where('name', 'Croatia')->value('id'),
                'destinations' => 'Hvar, Korčula',
                'overview' => 'A relaxed 3-day island-hopping experience combining beaches, historic towns, and island nightlife.',
                'suggested_dates' => 'June - August',
                'difficulty_level' => 'Medium',
                'submitted_by' => 'Suriati Pranata',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Historic Dubrovnik Weekend',
                'country_id' => Country::where('name', 'Croatia')->value('id'),
                'destinations' => 'Dubrovnik',
                'overview' => 'A 2-day itinerary focused on Dubrovnik’s old town, city walls, and coastal views.',
                'suggested_dates' => 'All year',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Oliver Smith',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 🇨🇿 CZECH REPUBLIC (3)

            [
                'trip_name' => 'Prague Historical Discovery',
                'country_id' => Country::where('name', 'Czech Republic')->value('id'),
                'destinations' => 'Prague',
                'overview' => 'A 3-day exploration of Prague’s castles, bridges, and medieval streets. Perfect for first-time visitors.',
                'suggested_dates' => 'March - October',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Isabella Rossi',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Czech Culture & Beer Trail',
                'country_id' => Country::where('name', 'Czech Republic')->value('id'),
                'destinations' => 'Prague, Pilsen',
                'overview' => 'A themed 3-day trip focusing on Czech culture, breweries, and local traditions.',
                'suggested_dates' => 'April - September',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Michael Brown',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'trip_name' => 'Bohemian Countryside Escape',
                'country_id' => Country::where('name', 'Czech Republic')->value('id'),
                'destinations' => 'Český Krumlov',
                'overview' => 'A peaceful 2-day countryside escape exploring castles, rivers, and small historic towns.',
                'suggested_dates' => 'May - August',
                'difficulty_level' => 'Easy',
                'submitted_by' => 'Emma Johnson',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
