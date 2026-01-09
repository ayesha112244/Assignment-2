<x-layout>
    <div class="max-w-3xl mx-auto mt-10 bg-white rounded-2xl shadow-lg p-8">

        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">
            Add a New Itinerary
        </h1>

        <form action="{{ route('itineraries.store') }}" method="POST" class="space-y-6">
            @csrf

            {{-- Trip Name --}}
            <div>
                <label class="block font-semibold text-gray-700 mb-1">
                    Trip Name <span class="text-red-500">*</span>
                </label>
                <input type="text" name="trip_name" value="{{ old('trip_name') }}"
                       class="w-full rounded-lg border border-gray-300 px-4 py-2
                              focus:ring-2 focus:ring-green-500 focus:outline-none">
                @error('trip_name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Country --}}
            <div>
                <label class="block font-semibold text-gray-700 mb-1">
                    Country <span class="text-red-500">*</span>
                </label>
                <input type="text" name="country" value="{{ old('country') }}"
                       class="w-full rounded-lg border border-gray-300 px-4 py-2
                              focus:ring-2 focus:ring-green-500 focus:outline-none">
                @error('country')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Destinations --}}
            <div>
                <label class="block font-semibold text-gray-700 mb-1">
                    Destinations <span class="text-red-500">*</span>
                </label>
                <input type="text" name="destinations" value="{{ old('destinations') }}"
                       class="w-full rounded-lg border border-gray-300 px-4 py-2
                              focus:ring-2 focus:ring-green-500 focus:outline-none">
                @error('destinations')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Overview --}}
            <div>
                <label class="block font-semibold text-gray-700 mb-1">
                    Overview <span class="text-red-500">*</span>
                </label>
                <textarea name="overview" rows="4"
                          class="w-full rounded-lg border border-gray-300 px-4 py-2
                                 focus:ring-2 focus:ring-green-500 focus:outline-none">{{ old('overview') }}</textarea>
                @error('overview')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Suggested Dates --}}
            <div>
                <label class="block font-semibold text-gray-700 mb-1">
                    Suggested Dates <span class="text-red-500">*</span>
                </label>
                <input type="text" name="suggested_dates" value="{{ old('suggested_dates') }}"
                       class="w-full rounded-lg border border-gray-300 px-4 py-2
                              focus:ring-2 focus:ring-green-500 focus:outline-none">
                @error('suggested_dates')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Difficulty --}}
            <div>
                <label class="block font-semibold text-gray-700 mb-1">
                    Difficulty Level <span class="text-red-500">*</span>
                </label>
                <select name="difficulty_level"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2
                               focus:ring-2 focus:ring-green-500 focus:outline-none">
                    <option value="">Select level</option>
                    <option value="easy" {{ old('difficulty_level') == 'easy' ? 'selected' : '' }}>Easy</option>
                    <option value="medium" {{ old('difficulty_level') == 'medium' ? 'selected' : '' }}>Medium</option>
                    <option value="hard" {{ old('difficulty_level') == 'hard' ? 'selected' : '' }}>Hard</option>
                </select>
                @error('difficulty_level')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submitted By --}}
            <div>
                <label class="block font-semibold text-gray-700 mb-1">
                    Submitted By <span class="text-red-500">*</span>
                </label>
                <input type="text" name="submitted_by" value="{{ old('submitted_by') }}"
                       class="w-full rounded-lg border border-gray-300 px-4 py-2
                              focus:ring-2 focus:ring-green-500 focus:outline-none">
                @error('submitted_by')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Buttons --}}
            <div class="flex justify-between items-center pt-4">
                <a href="{{ route('home') }}"
                   class="text-gray-600 hover:text-gray-900 font-semibold">
                    ← Back
                </a>

                <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white
                               px-6 py-2 rounded-lg font-bold transition">
                    Save Itinerary
                </button>
            </div>
        </form>
    </div>
</x-layout>
