<x-layout>

    <div class="max-w-7xl mx-auto px-4 py-10">

        <!-- Page Heading -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-800">
                Destinations
            </h1>
            <p class="text-gray-600 mt-2 text-lg">
                Where do you want to go?
            </p>
        </div>

        <!-- Destination Buttons -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            @foreach ($destinations as $destination)
                <a href="#destination-{{ $destination->id }}"
                   class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-full font-semibold transition">
                    {{ $destination->name }}
                </a>
            @endforeach
        </div>

        <!-- Destinations & Countries -->
        @foreach ($destinations as $destination)
            <div id="destination-{{ $destination->id }}" class="mb-14 scroll-mt-24">

                <h2 class="text-3xl font-bold text-gray-800 mb-6">
                    {{ $destination->name }}
                </h2>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">

                    @foreach ($destination->countries as $country)
                        <a href="{{ route('countries.show', $country->id) }}"
                           class="bg-white border border-gray-200 rounded-lg p-4 text-center
                                  hover:shadow-md hover:border-green-500 transition font-medium text-gray-700">
                            {{ $country->name }}
                        </a>
                    @endforeach

                </div>
            </div>
        @endforeach

    </div>

</x-layout>
