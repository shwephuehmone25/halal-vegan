<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of restaurants.
     */
    public function index(Request $request)
    {
        $query = Restaurant::orderBy('sort_id');

        if ($request->filled('city')) {
            $query->where('city', 'LIKE', '%' . $request->city . '%');
        }

        $restaurants = $query->paginate(10);

        $cities = Restaurant::select('city')
            ->whereNotNull('city')
            ->distinct()
            ->orderBy('city')
            ->pluck('city');

        return view('welcome', compact('restaurants', 'cities'));
    }

    /**
     * Store a newly created restaurant in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:150',
            'type'         => 'nullable|string|max:100',
            'phone_number' => 'required|string|max:20|unique:restaurants,phone_number',
            'address'      => 'nullable|string',
            'email'        => 'nullable|email|unique:restaurants,email',
            'website'      => 'nullable|url',
            'sort_id'      => 'nullable|integer|min:0',
            'is_active'    => 'nullable|boolean',
        ]);

        $restaurant = Restaurant::create($validated);

        return response()->json(
            [
                'data'    => $restaurant,
                'message' => 'Restaurant created successfully.'
            ],
            201
        );
    }

    /**
     * Display the specified restaurant.
     */
    public function show(Restaurant $restaurant)
    {
        $restaurant->load(['menus' => function ($query) {
            $query->where('is_available', true);
        }]);

        return view('restaurant.show', compact('restaurant'));
    }

    /**
     * Update the specified restaurant in storage.
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $validated = $request->validate([
            'name'         => 'sometimes|required|string|max:150',
            'type'         => 'nullable|string|max:100',
            'phone_number' => "sometimes|required|string|max:20|unique:restaurants,phone_number,{$restaurant->id}",
            'address'      => 'nullable|string',
            'email'        => "nullable|email|unique:restaurants,email,{$restaurant->id}",
            'website'      => 'nullable|url',
            'sort_id'      => 'nullable|integer|min:0',
            'is_active'    => 'nullable|boolean',
        ]);

        $restaurant->update($validated);

        return response()->json(
            [
                'data'    => $restaurant,
                'message' => 'Restaurant updated successfully.'
            ],
            200
        );
    }

    /**
     * Remove the specified restaurant from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return response()->json(['message' => 'Restaurant deleted successfully.']);
    }
}
