<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate; 
use App\Models\User;      
use App\Models\Review;             
use App\Models\Itinerary;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         Paginator::useTailwind();

        Gate::define('manage-itineraries', function (User $user, $itinerary) {

            // Admin can manage everything
            if ($user->role_id === 1) {
                return true;
            }

            // Normal user can manage ONLY their own itineraries
            return $itinerary->user_id === $user->id;
        });

        Gate::define('delete-review', function (User $user, Review $review) {
            // Sirf admin review delete kar sakta hai
            return $user->role_id === 1;
        });

    }
}