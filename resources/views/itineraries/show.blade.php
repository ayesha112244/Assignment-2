<x-layout>
    <div class="max-w-4xl mx-auto mt-10 bg-white rounded-xl shadow-lg p-6">

        <!-- Title -->
        <h1 class="text-3xl font-bold text-gray-800 mb-6">
            {{ $itinerary->trip_name }}
        </h1>

        <!-- Details -->
        <div class="space-y-3 text-gray-700">
            <p><span class="font-semibold">Country:</span> {{ $itinerary->country }}</p>
            <p><span class="font-semibold">Destinations:</span> {{ $itinerary->destinations }}</p>
            <p><span class="font-semibold">Overview:</span> {{ $itinerary->overview }}</p>
            <p><span class="font-semibold">Suggested Dates:</span> {{ $itinerary->suggested_dates }}</p>
            <p><span class="font-semibold">Difficulty Level:</span> {{ ucfirst($itinerary->difficulty_level) }}</p>
            <p><span class="font-semibold">Submitted By:</span> {{ $itinerary->submitted_by }}</p>
        </div>

        <!-- Action buttons -->
        @can('manage-itineraries', $itinerary)
            <div class="flex gap-4 mt-6">
                <a href="{{ route('itineraries.edit', $itinerary->id) }}"
                   class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                    Edit
                </a>

                <form action="{{ route('itineraries.destroy', $itinerary->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        onclick="return confirm('Are you sure you want to delete this itinerary?')"
                        class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition">
                        Delete
                    </button>
                </form>
            </div>
        @endcan

        <!-- Back link -->
        <a href="{{ route('home') }}"
           class="inline-block mt-6 text-green-700 font-semibold hover:underline">
            ← Back to All Itineraries
        </a>

        <!-- Reviews Section -->
        <hr class="my-8">

        <h2 class="text-2xl font-bold text-gray-800 mb-4">
            Reviews
        </h2>

        @if ($itinerary->reviews->count() > 0)
            <div class="space-y-4">
                @foreach ($itinerary->reviews as $review)
                    <div class="border rounded-lg p-4 bg-gray-50">
                        <p class="font-semibold text-gray-800">
                            {{ $review->user->name }}
                            <span class="text-sm text-gray-500">
                                • {{ $review->created_at->format('d M Y') }}
                            </span>
                        </p>

                        <p class="mt-1 text-sm text-gray-600">
                            Rating: {{ $review->rating }} / 5
                        </p>

                        <p class="mt-2 text-gray-700">
                            {{ $review->comment }}
                        </p>

                        @can('delete-review', $review)
                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="mt-3">
                                @csrf
                                @method('DELETE')
                                <button
                                    onclick="return confirm('Delete this review?')"
                                    class="text-sm text-red-600 hover:underline">
                                    Delete
                                </button>
                            </form>
                        @endcan
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-600">
                No reviews yet. Be the first to review this itinerary!
            </p>
        @endif

        <!-- Add Review Form -->
        @auth
            <hr class="my-8">

            <h3 class="text-xl font-bold text-gray-800 mb-4">
                Add Your Review
            </h3>

            <form action="{{ route('reviews.store', $itinerary->id) }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block font-semibold mb-1">Rating (1–5)</label>
                    <select name="rating"
                            class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-green-500">
                        <option value="">Select rating</option>
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    @error('rating')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-semibold mb-1">Comment</label>
                    <textarea name="comment" rows="4"
                              class="w-full border rounded-md px-3 py-2 focus:ring-2 focus:ring-green-500"
                              placeholder="Write your review..."></textarea>
                    @error('comment')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 transition">
                    Submit Review
                </button>
            </form>
        @endauth

    </div>
</x-layout>
