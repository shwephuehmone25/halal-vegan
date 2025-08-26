<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Restaurant;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = Restaurant::all();

        if ($restaurants->count() === 0) {
            $this->command->info('No restaurants found. Run RestaurantSeeder first.');
            return;
        }

        foreach ($restaurants as $restaurant) {
            $menus = [
                [
                    'restaurant_id' => $restaurant->id,
                    'name' => 'Signature Dish',
                    'image'        => 'img/halal/hors-doeuvre.jpg',
                    'category' => 'Halal',
                    'description' => 'Chef’s special creation.',
                    'price' => 2500,
                    'is_available' => true,
                    'sort_id' => 1,
                ],
                [
                    'restaurant_id' => $restaurant->id,
                    'name' => 'Classic Salad',
                    'category' => 'Vegan',
                    'image'        => 'img/halal/fish.jpg',
                    'description' => 'Fresh greens with vinaigrette.',
                    'price' => 2950,
                    'is_available' => true,
                    'sort_id' => 2,
                ],
                [
                    'restaurant_id' => $restaurant->id,
                    'name' => 'Seasonal Soup',
                    'category' => 'Halal',
                    'image'        => 'img/vegan/breakfast.jpg',
                    'description' => 'Soup of the day.',
                    'price' => 3725,
                    'is_available' => false,
                    'sort_id' => 3,
                ],
            ];

            foreach ($menus as $menuData) {
                Menu::create($menuData);
            }
        }
    }
}
