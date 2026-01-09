<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Destination;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $data = [

            'Europe' => [
                'Austria','Belgium','Bosnia & Herzegovina','Croatia',
                'Czech Republic','Denmark','England','France','Germany',
                'Greece','Hungary','Iceland','Ireland','Italy','Liechtenstein',
                'Luxembourg','Montenegro','Netherlands','Northern Ireland',
                'Norway','Poland','Portugal','San Marino','Scotland',
                'Slovakia','Spain','Svalbard','Sweden','Switzerland',
                'Turkey','United Kingdom'
            ],

            'North & South America' => [
                'Argentina','Aruba','Canada','Chile','Costa Rica',
                'Mexico','Peru','United States','US Virgin Islands'
            ],

            'Oceania' => [
                'American Samoa','Australia','Fiji','New Zealand','Samoa'
            ],

            'Africa' => [
                'Botswana','Egypt','Eswatini','Lesotho',
                'Morocco','South Africa','Zambia','Zimbabwe'
            ],

            'Middle East' => [
                'Israel','Jordan','Turkey','Abu Dhabi UAE'
            ],

            'Asia' => [
                'Pakistan','Bhutan','Cambodia','China','Hong Kong','India',
                'Indonesia','Japan','Laos','Malaysia','Myanmar','Nepal',
                'Singapore','South Korea','Taiwan','Thailand','Vietnam'
            ],
        ];
        $countryDetails = [
                // ===== EUROPE (PART 1) =====

            'Belgium' => [
                'description' => 'Belgium is a charming European country known for medieval towns, rich history, and world-famous food like waffles, chocolate, and fries.',
                'language' => 'Dutch, French, German',
                'capital' => 'Brussels',
                'currency' => 'Euro',
                'population' => '11 million',
            ],

            'France' => [
                'description' => 'France is famous for its art, fashion, cuisine, and iconic landmarks like the Eiffel Tower and the Louvre.',
                'language' => 'French',
                'capital' => 'Paris',
                'currency' => 'Euro',
                'population' => '65 million',
            ],

            'Germany' => [
                'description' => 'Germany offers a mix of modern cities and historic towns, known for engineering, castles, and cultural festivals.',
                'language' => 'German',
                'capital' => 'Berlin',
                'currency' => 'Euro',
                'population' => '83 million',
            ],

            'Italy' => [
                'description' => 'Italy is rich in history, art, and architecture, home to ancient Rome, the Vatican, and world-famous cuisine.',
                'language' => 'Italian',
                'capital' => 'Rome',
                'currency' => 'Euro',
                'population' => '59 million',
            ],

            'Spain' => [
                'description' => 'Spain is known for its vibrant culture, beaches, historic cities, and lively festivals.',
                'language' => 'Spanish',
                'capital' => 'Madrid',
                'currency' => 'Euro',
                'population' => '47 million',
            ],

            // ===== EUROPE (PART 2) =====

            'Austria' => [
                'description' => 'Austria is known for its stunning Alpine landscapes, classical music heritage, and elegant cities. It offers a rich cultural experience with historic palaces, charming old towns, and breathtaking mountain scenery.',
                'language' => 'German',
                'capital' => 'Vienna',
                'currency' => 'Euro',
                'population' => '9 million',
            ],

            'Bosnia & Herzegovina' => [
                'description' => 'Bosnia and Herzegovina is a culturally diverse country with Ottoman-era architecture, beautiful rivers, and a deep historical background shaped by different civilizations.',
                'language' => 'Bosnian, Croatian, Serbian',
                'capital' => 'Sarajevo',
                'currency' => 'Convertible Mark',
                'population' => '3.2 million',
            ],

            'Croatia' => [
                'description' => 'Croatia is famous for its crystal-clear Adriatic coastline, historic old towns, and scenic islands. It blends Mediterranean charm with medieval history and natural beauty.',
                'language' => 'Croatian',
                'capital' => 'Zagreb',
                'currency' => 'Euro',
                'population' => '3.9 million',
            ],

            'Czech Republic' => [
                'description' => 'The Czech Republic offers fairytale-like cities, historic castles, and a rich cultural heritage. Prague, its capital, is known for stunning architecture and vibrant city life.',
                'language' => 'Czech',
                'capital' => 'Prague',
                'currency' => 'Czech Koruna',
                'population' => '10.7 million',
            ],

            'Denmark' => [
                'description' => 'Denmark is a Scandinavian country known for modern design, cycling culture, and high quality of life. It combines historic Viking heritage with innovative urban living.',
                'language' => 'Danish',
                'capital' => 'Copenhagen',
                'currency' => 'Danish Krone',
                'population' => '5.9 million',
            ],

            'Greece' => [
                'description' => 'Greece is the birthplace of Western civilization, offering ancient ruins, beautiful islands, and rich mythology. It attracts visitors with its history, beaches, and cuisine.',
                'language' => 'Greek',
                'capital' => 'Athens',
                'currency' => 'Euro',
                'population' => '10.3 million',
            ],

            'Hungary' => [
                'description' => 'Hungary is known for its thermal baths, historic cities, and vibrant culture. Budapest, divided by the Danube River, is one of Europe’s most scenic capitals.',
                'language' => 'Hungarian',
                'capital' => 'Budapest',
                'currency' => 'Forint',
                'population' => '9.6 million',
            ],

            'Iceland' => [
                'description' => 'Iceland is famous for dramatic landscapes including volcanoes, glaciers, geysers, and waterfalls. It offers unique natural wonders and a peaceful environment.',
                'language' => 'Icelandic',
                'capital' => 'Reykjavík',
                'currency' => 'Icelandic Króna',
                'population' => '370,000',
            ],

            'Ireland' => [
                'description' => 'Ireland is known for its green countryside, friendly locals, and rich folklore. It has a strong cultural identity shaped by music, literature, and history.',
                'language' => 'Irish, English',
                'capital' => 'Dublin',
                'currency' => 'Euro',
                'population' => '5 million',
            ],

            'Liechtenstein' => [
                'description' => 'Liechtenstein is a small yet wealthy country nestled between Switzerland and Austria. It is known for alpine landscapes, castles, and a strong financial sector.',
                'language' => 'German',
                'capital' => 'Vaduz',
                'currency' => 'Swiss Franc',
                'population' => '39,000',
            ],

            'Luxembourg' => [
                'description' => 'Luxembourg is a small but influential European country known for its strong economy, historic fortifications, and multicultural population.',
                'language' => 'Luxembourgish, French, German',
                'capital' => 'Luxembourg City',
                'currency' => 'Euro',
                'population' => '660,000',
            ],

            'Montenegro' => [
                'description' => 'Montenegro offers stunning coastal scenery, medieval towns, and dramatic mountains. It is a growing travel destination with rich Balkan history.',
                'language' => 'Montenegrin',
                'capital' => 'Podgorica',
                'currency' => 'Euro',
                'population' => '620,000',
            ],

            'Netherlands' => [
                'description' => 'The Netherlands is known for canals, cycling culture, and progressive values. It offers vibrant cities, historic towns, and world-famous art museums.',
                'language' => 'Dutch',
                'capital' => 'Amsterdam',
                'currency' => 'Euro',
                'population' => '17.5 million',
            ],

            'Norway' => [
                'description' => 'Norway is famous for its fjords, northern lights, and dramatic landscapes. It combines natural beauty with a high standard of living.',
                'language' => 'Norwegian',
                'capital' => 'Oslo',
                'currency' => 'Norwegian Krone',
                'population' => '5.5 million',
            ],

            'Poland' => [
                'description' => 'Poland has a rich history shaped by resilience and culture. It features medieval cities, historic landmarks, and a strong national identity.',
                'language' => 'Polish',
                'capital' => 'Warsaw',
                'currency' => 'Złoty',
                'population' => '38 million',
            ],

            'Portugal' => [
                'description' => 'Portugal is known for its coastal beauty, historic cities, and maritime heritage. It offers warm hospitality, traditional music, and scenic landscapes.',
                'language' => 'Portuguese',
                'capital' => 'Lisbon',
                'currency' => 'Euro',
                'population' => '10.3 million',
            ],

            'San Marino' => [
                'description' => 'San Marino is one of the world’s oldest republics, surrounded by Italy. It is known for medieval architecture and stunning hilltop views.',
                'language' => 'Italian',
                'capital' => 'San Marino',
                'currency' => 'Euro',
                'population' => '34,000',
            ],

            'Slovakia' => [
                'description' => 'Slovakia offers mountainous landscapes, medieval castles, and charming towns. It is a hidden gem in Central Europe with rich traditions.',
                'language' => 'Slovak',
                'capital' => 'Bratislava',
                'currency' => 'Euro',
                'population' => '5.4 million',
            ],

            'Sweden' => [
                'description' => 'Sweden is known for innovation, clean cities, and natural beauty. It offers a balanced lifestyle with forests, lakes, and modern urban spaces.',
                'language' => 'Swedish',
                'capital' => 'Stockholm',
                'currency' => 'Swedish Krona',
                'population' => '10.5 million',
            ],

            'Switzerland' => [
                'description' => 'Switzerland is famous for the Alps, high-quality living, and financial stability. It offers breathtaking scenery and efficient public systems.',
                'language' => 'German, French, Italian',
                'capital' => 'Bern',
                'currency' => 'Swiss Franc',
                'population' => '8.8 million',
            ],

            'England' => [
                'description' => 'England is a historic country known for royal heritage, iconic landmarks, and vibrant cities. It offers a mix of ancient castles, modern culture, and world-famous universities.',
                'language' => 'English',
                'capital' => 'London',
                'currency' => 'Pound Sterling',
                'population' => '56 million',
            ],

            'Northern Ireland' => [
                'description' => 'Northern Ireland is known for dramatic coastlines, green landscapes, and rich Celtic history. It offers scenic beauty along with cultural traditions and historic landmarks.',
                'language' => 'English, Irish',
                'capital' => 'Belfast',
                'currency' => 'Pound Sterling',
                'population' => '1.9 million',
            ],

            'Scotland' => [
                'description' => 'Scotland is famous for its rugged landscapes, historic castles, and deep cultural traditions. It offers scenic highlands, historic cities, and a strong national identity.',
                'language' => 'English, Scottish Gaelic',
                'capital' => 'Edinburgh',
                'currency' => 'Pound Sterling',
                'population' => '5.5 million',
            ],

            'Svalbard' => [
                'description' => 'Svalbard is a remote Arctic region known for glaciers, polar wildlife, and extreme natural beauty. It is one of the northernmost inhabited places in the world.',
                'language' => 'Norwegian',
                'capital' => 'Longyearbyen',
                'currency' => 'Norwegian Krone',
                'population' => '2,500',
            ],

            'Turkey' => [
                'description' => 'Turkey connects Europe and Asia and is rich in history, culture, and natural beauty. It offers ancient ruins, vibrant cities, and diverse landscapes shaped by many civilizations.',
                'language' => 'Turkish',
                'capital' => 'Ankara',
                'currency' => 'Turkish Lira',
                'population' => '85 million',
            ],

            'United Kingdom' => [
                'description' => 'The United Kingdom is a historic and culturally diverse country made up of England, Scotland, Wales, and Northern Ireland. It is known for global influence, heritage, and modern cities.',
                'language' => 'English',
                'capital' => 'London',
                'currency' => 'Pound Sterling',
                'population' => '67 million',
            ],

            // ===== NORTH & SOUTH AMERICA =====

            'Argentina' => [
                'description' => 'Argentina is known for its rich culture, tango music, and diverse landscapes ranging from mountains to glaciers. It offers vibrant cities and strong European influence.',
                'language' => 'Spanish',
                'capital' => 'Buenos Aires',
                'currency' => 'Argentine Peso',
                'population' => '46 million',
            ],

            'Aruba' => [
                'description' => 'Aruba is a Caribbean island known for white sandy beaches, clear blue waters, and relaxed island lifestyle. It is a popular destination for beach tourism.',
                'language' => 'Dutch, Papiamento',
                'capital' => 'Oranjestad',
                'currency' => 'Aruban Florin',
                'population' => '110,000',
            ],

            'Canada' => [
                'description' => 'Canada is known for vast natural beauty, multicultural cities, and high quality of life. It offers mountains, lakes, forests, and vibrant urban centres.',
                'language' => 'English, French',
                'capital' => 'Ottawa',
                'currency' => 'Canadian Dollar',
                'population' => '40 million',
            ],

            'Chile' => [
                'description' => 'Chile stretches along South America’s western edge and offers deserts, glaciers, mountains, and coastline. It is known for natural diversity and stability.',
                'language' => 'Spanish',
                'capital' => 'Santiago',
                'currency' => 'Chilean Peso',
                'population' => '19 million',
            ],

            'Costa Rica' => [
                'description' => 'Costa Rica is famous for eco-tourism, rainforests, wildlife, and peaceful living. It is a leader in sustainability and natural conservation.',
                'language' => 'Spanish',
                'capital' => 'San José',
                'currency' => 'Costa Rican Colón',
                'population' => '5.2 million',
            ],

            'Mexico' => [
                'description' => 'Mexico is rich in ancient history, vibrant traditions, and diverse landscapes. It offers historic ruins, colourful cities, and world-famous cuisine.',
                'language' => 'Spanish',
                'capital' => 'Mexico City',
                'currency' => 'Mexican Peso',
                'population' => '129 million',
            ],

            'Peru' => [
                'description' => 'Peru is home to ancient civilizations including the Incas and offers breathtaking landscapes such as Machu Picchu and the Andes mountains.',
                'language' => 'Spanish',
                'capital' => 'Lima',
                'currency' => 'Peruvian Sol',
                'population' => '34 million',
            ],

            'United States' => [
                'description' => 'The United States is a vast and diverse country offering modern cities, national parks, and cultural influence worldwide.',
                'language' => 'English',
                'capital' => 'Washington, D.C.',
                'currency' => 'US Dollar',
                'population' => '333 million',
            ],

            'US Virgin Islands' => [
                'description' => 'The US Virgin Islands are known for tropical beaches, clear waters, and relaxed island culture. They are a popular Caribbean travel destination.',
                'language' => 'English',
                'capital' => 'Charlotte Amalie',
                'currency' => 'US Dollar',
                'population' => '105,000',
            ],

            // ===== OCEANIA =====

            'American Samoa' => [
                'description' => 'American Samoa is a peaceful group of islands in the South Pacific, known for its tropical landscapes, strong Polynesian culture, and relaxed island lifestyle. It offers beautiful beaches, volcanic mountains, and traditional village life.',
                'language' => 'English, Samoan',
                'capital' => 'Pago Pago',
                'currency' => 'US Dollar',
                'population' => '55,000',
            ],

            'Australia' => [
                'description' => 'Australia is a vast and diverse country famous for its modern cities, unique wildlife, beautiful beaches, and natural wonders like the Great Barrier Reef. It offers a high quality of life, multicultural society, and rich indigenous heritage.',
                'language' => 'English',
                'capital' => 'Canberra',
                'currency' => 'Australian Dollar',
                'population' => '26 million',
            ],

            'Fiji' => [
                'description' => 'Fiji is a tropical island nation known for its crystal-clear waters, coral reefs, and warm hospitality. It is a popular destination for relaxation, adventure, and experiencing vibrant island traditions.',
                'language' => 'English, Fijian, Hindi',
                'capital' => 'Suva',
                'currency' => 'Fijian Dollar',
                'population' => '930,000',
            ],

            'New Zealand' => [
                'description' => 'New Zealand is known for its breathtaking landscapes, including mountains, lakes, and coastlines. It offers a peaceful environment, rich Māori culture, and outdoor adventures such as hiking and skiing.',
                'language' => 'English, Māori',
                'capital' => 'Wellington',
                'currency' => 'New Zealand Dollar',
                'population' => '5.2 million',
            ],

            'Samoa' => [
                'description' => 'Samoa is a Polynesian island country famous for its natural beauty, strong cultural traditions, and welcoming communities. It offers lush rainforests, waterfalls, and a slow-paced island lifestyle.',
                'language' => 'Samoan, English',
                'capital' => 'Apia',
                'currency' => 'Samoan Tālā',
                'population' => '225,000',
            ],

            // ===== AFRICA =====
            'Botswana' => [
                'description' => 'Botswana is known for its stable governance, rich wildlife, and vast natural reserves. It is home to the Okavango Delta and offers some of the best safari experiences in Africa.',
                'language' => 'English, Setswana',
                'capital' => 'Gaborone',
                'currency' => 'Botswana Pula',
                'population' => '2.6 million',
            ],

            'Egypt' => [
                'description' => 'Egypt is one of the world’s oldest civilizations, famous for ancient monuments like the pyramids and the Nile River. It offers a deep historical legacy combined with vibrant modern culture.',
                'language' => 'Arabic',
                'capital' => 'Cairo',
                'currency' => 'Egyptian Pound',
                'population' => '110 million',
            ],

            'Eswatini' => [
                'description' => 'Eswatini, formerly known as Swaziland, is a small landlocked country known for its strong cultural traditions, scenic landscapes, and wildlife reserves.',
                'language' => 'Swazi, English',
                'capital' => 'Mbabane',
                'currency' => 'Lilangeni',
                'population' => '1.2 million',
            ],

            'Lesotho' => [
                'description' => 'Lesotho is a mountainous country entirely surrounded by South Africa. It is known for its high-altitude landscapes, traditional villages, and unique cultural identity.',
                'language' => 'Sesotho, English',
                'capital' => 'Maseru',
                'currency' => 'Lesotho Loti',
                'population' => '2.3 million',
            ],

            'Morocco' => [
                'description' => 'Morocco offers a blend of Arab, Berber, and European influences. It is known for its colorful markets, historic cities, deserts, and rich traditions in food and crafts.',
                'language' => 'Arabic, Berber',
                'capital' => 'Rabat',
                'currency' => 'Moroccan Dirham',
                'population' => '37 million',
            ],

            'South Africa' => [
                'description' => 'South Africa is a culturally diverse country with stunning landscapes, wildlife safaris, and vibrant cities. It is known for its history, natural beauty, and rich cultural mix.',
                'language' => 'Zulu, Afrikaans, English (and others)',
                'capital' => 'Pretoria',
                'currency' => 'South African Rand',
                'population' => '60 million',
            ],

            'Zambia' => [
                'description' => 'Zambia is famous for its natural beauty and wildlife, including Victoria Falls. It offers peaceful landscapes, national parks, and rich local traditions.',
                'language' => 'English',
                'capital' => 'Lusaka',
                'currency' => 'Zambian Kwacha',
                'population' => '20 million',
            ],

            'Zimbabwe' => [
                'description' => 'Zimbabwe is known for its dramatic scenery, ancient ruins, and wildlife. It is home to Victoria Falls and has a strong cultural and historical heritage.',
                'language' => 'English, Shona, Ndebele',
                'capital' => 'Harare',
                'currency' => 'Zimbabwean Dollar',
                'population' => '16 million',
            ],

            // ===== MIDDLE EAST =====

            'Israel' => [
                'description' => 'Israel is a country with deep historical and religious significance, important to Judaism, Christianity, and Islam. It offers a mix of ancient cities, modern urban life, cultural diversity, and innovation in technology and education.',
                'language' => 'Hebrew, Arabic',
                'capital' => 'Jerusalem',
                'currency' => 'Israeli New Shekel',
                'population' => '9.8 million',
            ],

            'Jordan' => [
                'description' => 'Jordan is known for its rich history, ancient ruins, and desert landscapes. Famous sites like Petra and the Dead Sea attract visitors, while the country is also known for hospitality and cultural traditions.',
                'language' => 'Arabic',
                'capital' => 'Amman',
                'currency' => 'Jordanian Dinar',
                'population' => '11 million',
            ],

            'Turkey' => [
                'description' => 'Turkey bridges Europe and Asia, offering a unique blend of Eastern and Western cultures. It is known for historic cities, stunning architecture, rich cuisine, and diverse landscapes ranging from beaches to mountains.',
                'language' => 'Turkish',
                'capital' => 'Ankara',
                'currency' => 'Turkish Lira',
                'population' => '85 million',
            ],

            'Abu Dhabi UAE' => [
                'description' => 'Abu Dhabi is the capital of the United Arab Emirates and is known for its modern architecture, luxury lifestyle, and strong cultural heritage. It combines tradition with rapid development and global influence.',
                'language' => 'Arabic',
                'capital' => 'Abu Dhabi',
                'currency' => 'UAE Dirham',
                'population' => '1.6 million',
            ],

            // ===== ASIA =====

            'Pakistan' => [
                'description' => 'Pakistan is a culturally rich country with diverse landscapes including mountains, deserts, and rivers. It has a deep historical background, strong traditions, and a growing urban population.',
                'language' => 'Urdu, English',
                'capital' => 'Islamabad',
                'currency' => 'Pakistani Rupee',
                'population' => '241 million',
            ],

            'Bhutan' => [
                'description' => 'Bhutan is a peaceful Himalayan kingdom known for prioritizing happiness and environmental conservation. It offers stunning mountain views, monasteries, and strong spiritual traditions.',
                'language' => 'Dzongkha',
                'capital' => 'Thimphu',
                'currency' => 'Ngultrum',
                'population' => '800,000',
            ],

            'Cambodia' => [
                'description' => 'Cambodia is known for its ancient temples, especially Angkor Wat. It has a rich cultural heritage, friendly people, and a growing tourism sector.',
                'language' => 'Khmer',
                'capital' => 'Phnom Penh',
                'currency' => 'Cambodian Riel',
                'population' => '17 million',
            ],

            'China' => [
                'description' => 'China is one of the world’s oldest civilizations with a long history, modern cities, and vast landscapes. It plays a major role in global economy, culture, and technology.',
                'language' => 'Mandarin',
                'capital' => 'Beijing',
                'currency' => 'Chinese Yuan',
                'population' => '1.4 billion',
            ],

            'Hong Kong' => [
                'description' => 'Hong Kong is a dynamic city known for its skyline, financial importance, and cultural mix of East and West. It offers modern living alongside traditional customs.',
                'language' => 'Cantonese, English',
                'capital' => 'Hong Kong',
                'currency' => 'Hong Kong Dollar',
                'population' => '7.5 million',
            ],

            'India' => [
                'description' => 'India is a diverse country with many languages, religions, and cultures. It is known for its ancient history, festivals, cuisine, and fast-growing economy.',
                'language' => 'Hindi, English',
                'capital' => 'New Delhi',
                'currency' => 'Indian Rupee',
                'population' => '1.4 billion',
            ],

            'Indonesia' => [
                'description' => 'Indonesia is an island nation with rich biodiversity and cultural diversity. It is known for tropical islands, volcanoes, and strong traditional customs.',
                'language' => 'Indonesian',
                'capital' => 'Jakarta',
                'currency' => 'Indonesian Rupiah',
                'population' => '277 million',
            ],

            'Japan' => [
                'description' => 'Japan blends ancient traditions with advanced technology. It is known for discipline, innovation, cultural heritage, and beautiful natural scenery.',
                'language' => 'Japanese',
                'capital' => 'Tokyo',
                'currency' => 'Japanese Yen',
                'population' => '125 million',
            ],

            'Laos' => [
                'description' => 'Laos is a peaceful landlocked country known for rivers, mountains, and Buddhist culture. It offers a relaxed lifestyle and strong traditional values.',
                'language' => 'Lao',
                'capital' => 'Vientiane',
                'currency' => 'Lao Kip',
                'population' => '7.5 million',
            ],

            'Malaysia' => [
                'description' => 'Malaysia is a multicultural country with modern cities and natural rainforests. It offers a blend of traditions, cuisines, and rapid development.',
                'language' => 'Malay',
                'capital' => 'Kuala Lumpur',
                'currency' => 'Malaysian Ringgit',
                'population' => '34 million',
            ],

            'Myanmar' => [
                'description' => 'Myanmar is known for its ancient temples, spiritual traditions, and scenic landscapes. It has a strong cultural identity rooted in Buddhism.',
                'language' => 'Burmese',
                'capital' => 'Naypyidaw',
                'currency' => 'Kyat',
                'population' => '55 million',
            ],

            'Nepal' => [
                'description' => 'Nepal is home to the Himalayas and Mount Everest. It is known for spiritual heritage, mountain culture, and warm hospitality.',
                'language' => 'Nepali',
                'capital' => 'Kathmandu',
                'currency' => 'Nepalese Rupee',
                'population' => '30 million',
            ],

            'Singapore' => [
                'description' => 'Singapore is a global financial hub known for cleanliness, safety, and modern infrastructure. It combines cultural diversity with economic strength.',
                'language' => 'English, Malay, Mandarin, Tamil',
                'capital' => 'Singapore',
                'currency' => 'Singapore Dollar',
                'population' => '5.9 million',
            ],

            'South Korea' => [
                'description' => 'South Korea is known for technology, pop culture, and rapid development. It blends traditional values with modern lifestyles and innovation.',
                'language' => 'Korean',
                'capital' => 'Seoul',
                'currency' => 'South Korean Won',
                'population' => '52 million',
            ],

            'Taiwan' => [
                'description' => 'Taiwan is known for advanced technology, night markets, and beautiful landscapes. It offers a mix of traditional Chinese culture and modern living.',
                'language' => 'Mandarin',
                'capital' => 'Taipei',
                'currency' => 'New Taiwan Dollar',
                'population' => '23 million',
            ],

            'Thailand' => [
                'description' => 'Thailand is famous for tropical beaches, temples, and friendly culture. It attracts tourists with its cuisine, traditions, and natural beauty.',
                'language' => 'Thai',
                'capital' => 'Bangkok',
                'currency' => 'Thai Baht',
                'population' => '71 million',
            ],

            'Vietnam' => [
                'description' => 'Vietnam is known for its rich history, scenic landscapes, and vibrant cities. It offers a strong cultural identity shaped by tradition and resilience.',
                'language' => 'Vietnamese',
                'capital' => 'Hanoi',
                'currency' => 'Vietnamese Dong',
                'population' => '100 million',
            ],

        ];


        foreach ($data as $destinationName => $countries) {
            $destination = Destination::where('name', $destinationName)->first();

            foreach ($countries as $country) {
                Country::create([
                    'name' => $country,
                    'destination_id' => $destination->id,
                    'description' => $countryDetails[$country]['description'] ?? null,
                    'language' => $countryDetails[$country]['language'] ?? null,
                    'capital' => $countryDetails[$country]['capital'] ?? null,
                    'currency' => $countryDetails[$country]['currency'] ?? null,
                    'population' => $countryDetails[$country]['population'] ?? null,
                ]);
            }
        }
    }
}
