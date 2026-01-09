<x-layout>

    <div class="max-w-7xl mx-auto px-4 py-6">

        <!-- Page Title -->
        <h1 class="text-3xl font-bold text-gray-800 mb-6">
            All Itineraries
        </h1>

        <!-- Search Feedback -->
        @if(request('search'))
            <div class="mb-6">
                @if ($itineraries->count() > 0)
                    <p class="text-green-700 bg-green-100 border border-green-300 rounded-lg px-4 py-2">
                        <strong>Search results for:</strong>
                        <span class="font-semibold">"{{ request('search') }}"</span>
                    </p>
                @else
                    <p class="text-red-700 bg-red-100 border border-red-300 rounded-lg px-4 py-2">
                        <strong>No results found for:</strong>
                        <span class="font-semibold">"{{ request('search') }}"</span>
                    </p>
                @endif
            </div>
        @endif

        <!-- Itineraries Grid -->
        @if ($itineraries->count() > 0)

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach ($itineraries as $itinerary)
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">

                        <h3 class="text-xl font-semibold text-gray-800 mb-2">
                            {{ $itinerary->trip_name }}
                        </h3>

                        <p class="text-gray-600 mb-4">
                            <span class="font-medium">Destination:</span>
                            {{ $itinerary->destinations }}
                        </p>

                        <a href="{{ route('itineraries.show', $itinerary->id) }}"
                           class="inline-block bg-green-600 hover:bg-green-700 text-white text-sm font-semibold px-4 py-2 rounded-md transition">
                            View Details
                        </a>

                    </div>
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $itineraries->appends(['search' => request('search')])->links() }}
            </div>

        @else
            @unless(request('search'))
                <p class="text-gray-600 mt-6">
                    No itineraries found.
                </p>
            @endunless
        @endif

    </div>

</x-layout>
