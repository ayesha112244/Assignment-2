<x-layout>
    <div class="max-w-3xl mx-auto mt-8 px-4">

        <h1 class="text-3xl font-bold text-slate-800 mb-6 text-center">
            Edit Itinerary
        </h1>

        <div class="bg-white/80 backdrop-blur-md shadow-lg rounded-xl p-6">

            <form action="{{ route('itineraries.update', $itinerary->id) }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

                {{-- Trip Name --}}
                <div>
                    <label class="block font-semibold mb-1">
                        Trip Name <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        name="trip_name"
                        value="{{ old('trip_name', $itinerary->trip_name) }}"
                        class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                    >
                    @error('trip_name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Country --}}
                <div>
                    <label class="block font-semibold mb-1">
                        Country <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        name="country"
                        value="{{ old('country', $itinerary->country) }}"
                        class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                    >
                    @error('country')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Destinations --}}
                <div>
                    <label class="block font-semibold mb-1">
                        Destinations <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        name="destinations"
                        value="{{ old('destinations', $itinerary->destinations) }}"
                        class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                    >
                    @error('destinations')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Overview --}}
                <div>
                    <label class="block font-semibold mb-1">
                        Overview <span class="text-red-500">*</span>
                    </label>
                    <textarea
                        name="overview"
                        rows="3"
                        class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                    >{{ old('overview', $itinerary->overview) }}</textarea>
                    @error('overview')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Suggested Dates --}}
                <div>
                    <label class="block font-semibold mb-1">
                        Suggested Dates <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        name="suggested_dates"
                        value="{{ old('suggested_dates', $itinerary->suggested_dates) }}"
                        class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                    >
                    @error('suggested_dates')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Difficulty Level --}}
                <div>
                    <label class="block font-semibold mb-1">
                        Difficulty Level <span class="text-red-500">*</span>
                    </label>
                    <select
                        name="difficulty_level"
                        class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                    >
                        <option value="easy" {{ $itinerary->difficulty_level == 'easy' ? 'selected' : '' }}>Easy</option>
                        <option value="medium" {{ $itinerary->difficulty_level == 'medium' ? 'selected' : '' }}>Medium</option>
                        <option value="hard" {{ $itinerary->difficulty_level == 'hard' ? 'selected' : '' }}>Hard</option>
                    </select>
                    @error('difficulty_level')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submitted By --}}
                <div>
                    <label class="block font-semibold mb-1">
                        Submitted By <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        name="submitted_by"
                        value="{{ old('submitted_by', $itinerary->submitted_by) }}"
                        class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"
                    >
                    @error('submitted_by')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit --}}
                <button
                    type="submit"
                    class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 rounded-xl transition"
                >
                    Update Itinerary
                </button>
            </form>
        </div>

        <a
            href="{{ route('home') }}"
            class="block text-center mt-6 font-semibold text-emerald-700 hover:underline"
        >
            ← Back to All Itineraries
        </a>

    </div>
</x-layout>
