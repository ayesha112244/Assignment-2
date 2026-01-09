<x-layout>

    <div class="max-w-7xl mx-auto px-4 py-10">

        <!-- Country Heading -->
        <h1 class="text-4xl font-bold text-gray-800 mb-4">
            {{ $country->name }}
        </h1>

        <p class="text-gray-600 text-lg mb-8">
            {{ $country->name }} Travel Guide
        </p>

        <!-- Travel Guide -->
        <div class="bg-white rounded-xl shadow p-6 mb-10">
            <p class="text-gray-700 leading-relaxed">
                {{ $country->description }}
            </p>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">

            <div class="bg-gray-100 rounded-lg p-4 text-center">
                <p class="text-sm text-gray-500">Language</p>
                <p class="font-semibold">{{ $country->language }}</p>
            </div>

            <div class="bg-gray-100 rounded-lg p-4 text-center">
                <p class="text-sm text-gray-500">Capital</p>
                <p class="font-semibold">{{ $country->capital }}</p>
            </div>

            <div class="bg-gray-100 rounded-lg p-4 text-center">
                <p class="text-sm text-gray-500">Currency</p>
                <p class="font-semibold">{{ $country->currency }}</p>
            </div>

            <div class="bg-gray-100 rounded-lg p-4 text-center">
                <p class="text-sm text-gray-500">Population</p>
                <p class="font-semibold">{{ $country->population }}</p>
            </div>

        </div>

        <hr class="my-10">

        <h2 class="text-2xl font-bold text-gray-800 mb-6">
            Itineraries in {{ $country->name }}
        </h2>

        @if ($country->itineraries->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($country->itineraries as $itinerary)
                    <div class="bg-white rounded-xl shadow-md p-5 hover:shadow-lg transition">

                        <h3 class="text-lg font-semibold text-gray-800 mb-2">
                            {{ $itinerary->trip_name }}
                        </h3>

                        <p class="text-gray-600 mb-3">
                            {{ Str::limit($itinerary->overview, 90) }}
                        </p>

                        <a href="{{ route('itineraries.show', $itinerary->id) }}"
                           class="inline-block bg-green-600 hover:bg-green-700 text-white text-sm px-4 py-2 rounded-md">
                            View Itinerary
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-600">
                No itineraries available for this country yet.
            </p>
        @endif

    </div>

</x-layout>
