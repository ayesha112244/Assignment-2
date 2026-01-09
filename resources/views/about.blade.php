<x-layout>
    <div class="max-w-4xl mx-auto mt-10 bg-white rounded-xl shadow-md p-8">

        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">
            About This Web App
        </h2>

        <div class="space-y-4 text-gray-700 leading-relaxed">
            <p>
                <span class="font-semibold text-gray-900">TripNest</span> is a simple and
                user-friendly web application designed for exploring and sharing travel
                itinerary ideas. Whether you're planning your next adventure or looking
                for inspiration, this platform allows you to browse trip suggestions from
                around the world.
            </p>

            <p>
                Users can create detailed itineraries by adding destinations, dates,
                difficulty levels, and personal notes. Each itinerary can be viewed,
                edited, or deleted, making it easy to manage travel plans in one place.
            </p>

            <p>
                This application was built using
                <span class="font-semibold">Laravel</span> as part of an academic project.
                It demonstrates essential web development concepts such as MVC
                architecture, CRUD functionality, validation, pagination, database
                migrations, and reusable Blade components.
            </p>

            <p>
                Whether you're contributing your own trip ideas or exploring itineraries
                shared by others, TripNest aims to make travel planning simple,
                organised, and enjoyable.
            </p>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('home') }}"
               class="inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                ← Back to Home
            </a>
        </div>

    </div>
</x-layout>
