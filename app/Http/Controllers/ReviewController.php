<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Itinerary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ReviewController extends Controller
{
    use AuthorizesRequests;

    public function store(Request $request, Itinerary $itinerary)
    {
        $request->validate([
            'rating'  => 'required|integer|min:1|max:5',
            'comment' => 'required|min:5',
        ]);

        Review::create([
            'itinerary_id' => $itinerary->id,
            'user_id'      => Auth::id(),
            'rating'       => $request->rating,
            'comment'      => $request->comment,
        ]);

        return redirect()
            ->route('itineraries.show', $itinerary->id)
            ->with('success', 'Review added successfully!');
    }

    public function destroy(Review $review)
    {
        $this->authorize('delete-review', $review);

        $review->delete();

        return back()->with('success', 'Review deleted successfully!');
    }
}
