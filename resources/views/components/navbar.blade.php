<div class="mx-4 mt-4" x-data="{ open: false }">
    <nav class="bg-gray-900 text-white px-6 py-4 rounded-xl shadow-lg">
        <div class="max-w-7xl mx-auto flex items-center justify-between">

            <!-- Logo -->
            <div class="text-2xl font-bold tracking-wide">
                Earth Trekkers
            </div>

            @auth
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-6 text-sm font-semibold">
                <a href="{{ route('home') }}" class="hover:text-green-400 transition">
                    Home
                </a>

                <a href="{{ route('destinations.index') }}" class="hover:text-green-400 transition">
                    Destinations
                </a>

                <a href="{{ route('itineraries.create') }}" class="hover:text-green-400 transition">
                    Create New Itinerary
                </a>

                <a href="{{ url('/about') }}" class="hover:text-green-400 transition">
                    About
                </a>

                <!-- Search -->
                <form action="{{ route('home') }}" method="GET" class="flex gap-2">
                    <input
                        type="text"
                        name="search"
                        placeholder="Search destination..."
                        value="{{ request('search') }}"
                        class="px-3 py-2 rounded-md bg-gray-800 text-white placeholder-gray-400 text-sm
                            focus:outline-none focus:ring-2 focus:ring-green-500"
                    />
                    <button
                        type="submit"
                        class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded-md text-sm font-bold transition">
                        Search
                    </button>
                </form>
            </div>

            <!-- Mobile Button -->
            <button
                @click="open = !open"
                class="md:hidden text-white focus:outline-none text-3xl">
                ☰
            </button>
            @endauth
        </div>

        <!-- Mobile Menu -->
        @auth
        <div
            x-show="open"
            x-transition
            @click.outside="open = false"
            class="md:hidden mt-4 space-y-4 border-t border-gray-700 pt-4">

            <a href="{{ route('home') }}" class="block hover:text-green-400">
                Home
            </a>

            <a href="{{ route('destinations.index') }}" class="block hover:text-green-400">
                Destinations
            </a>

            <a href="{{ route('itineraries.create') }}" class="block hover:text-green-400">
                Create New Itinerary
            </a>

            <a href="{{ url('/about') }}" class="block hover:text-green-400">
                About
            </a>

            <form action="{{ route('home') }}" method="GET" class="flex gap-2">
                <input
                    type="text"
                    name="search"
                    placeholder="Search destination..."
                    value="{{ request('search') }}"
                    class="w-full px-3 py-2 rounded-md text-white text-sm
                           focus:outline-none focus:ring-2 focus:ring-green-500"
                >
                <button
                    type="submit"
                    class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded-md text-sm font-bold">
                    Go
                </button>
            </form>
        </div>
        @endauth
    </nav>
</div>
