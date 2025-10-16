<?php
namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'name'         => 'La Bella Italia',
                'type'         => 'Halal',
                'city'         => 'Yangon',
                'phone_number' => '+1234567890',
                'location'      => '13th Street, Latha Township, Yangon',
                'email'        => 'contact@labellaitalia.com',
                'website'      => 'https://labellaitalia.com',
                'image'        => 'logo/01K7NQFHYW65GD1R4XZEE2AA8B.jpg',
                'sort_id'      => 1,
                'is_active'    => true,
            ],
            [
                'name'         => 'Sakura Sushi',
                'type'         => 'Vegan',
                'city'         => 'Yangon',
                'phone_number' => '+1987654321',
                'location'      => 'Pyay Road, Sanchaung Township, Yangon',
                'email'        => 'info@sakurasushi.jp',
                'website'      => 'https://sakurasushi.jp',
                'image'        => 'logo/01K7NSH5YXXDDH8W7DT8J370MT.jpg',
                'sort_id'      => 2,
                'is_active'    => true,
            ],
            [
                'name'         => 'Spicy Dragon',
                'type'         => 'Halal',
                'city'         => 'Mandalay',
                'phone_number' => '+1122334455',
                'location'      => 'Pyin Oo Lwin Road, Between 31st & 32nd street, Chan Aye Thar Zan Township, Mandalay',
                'email'        => 'reservations@spicydragon.cn',
                'website'      => 'https://spicydragon.cn',
                'image'        => 'logo/01K7NSH5YXXDDH8W7DT8J370MT.jpg',
                'sort_id'      => 3,
                'is_active'    => true,
            ],
            [
                'name'         => 'Healthy',
                'type'         => 'Halal',
                'city'         => 'Yangon',
                'phone_number' => '+1234563490',
                'location'      => '19th Street, Latha Township, Yangon',
                'email'        => 'contact@healthy.com',
                'website'      => 'https://healthy.com',
                'image'        => 'logo/01K7NQFHYW65GD1R4XZEE2AA8B.jpg',
                'sort_id'      => 4,
                'is_active'    => true,
            ],
            [
                'name'         => 'Noodles',
                'type'         => 'Vegan',
                'city'         => 'Yangon',
                'phone_number' => '+19938654321',
                'location'      => 'Nyaung Pin Lay Zay Plaza, Lanmadaw Township, Yangon',
                'email'        => 'info@noodle.com',
                'website'      => 'https://noodles.com',
                'image'        => 'logo/01K7NSTFBXN3CYS8BK0E3PGMBN.jpg',
                'sort_id'      => 5,
                'is_active'    => true,
            ],
            [
                'name'         => 'Pancake',
                'type'         => 'Halal',
                'city'         => 'Mandalay',
                'phone_number' => '+1922964455',
                'location'      => 'No.C-2/146, Manawhari Rd, Bet 50nd & 55th St, Mandalay',
                'email'        => 'pancake@gmail.com',
                'website'      => 'https://spancake.com',
                'image'        => 'logo/1760596238-pizza-3010062_1280.jpg',
                'sort_id'      => 6,
                'is_active'    => true,
            ],
            [
                'name'         => 'Green Crescent',
                'type'         => 'Halal',
                'city'         => 'Mandalay',
                'phone_number' => '+11224466455',
                'location'      => 'Pyin Oo Lwin Road, Between 20st & 32nd street, Chan Aye Thar Zan Township, Mandalay',
                'email'        => 'green@gmail.com',
                'website'      => 'https://green-crescent.com',
                'image'        => 'logo/1760596238-pizza-3010062_1280.jpg',
                'sort_id'      => 7,
                'is_active'    => true,
            ],
            [
                'name'         => 'Vegan Oasis',
                'type'         => 'Halal',
                'city'         => 'Yangon',
                'phone_number' => '+12345623190',
                'location'      => '122th Street, Tamwe Township, Yangon',
                'email'        => 'contact@vegan-oasis@gmail.com',
                'website'      => 'https://vegan-oasis.com',
                'image'        => 'logo/1760596238-pizza-3010062_1280.jpg',
                'sort_id'      => 8,
                'is_active'    => true,
            ],
            [
                'name'         => 'Halal Harvest',
                'type'         => 'Vegan',
                'city'         => 'Yangon',
                'phone_number' => '+19938659123',
                'location'      => 'Bo Kalay Zay, Lanmadaw Township, Yangon',
                'email'        => 'halal-harvest@gmail.com',
                'website'      => 'https://halal-harvest.com',
                'image'        => 'logo/1760596238-pizza-3010062_1280.jpg',
                'sort_id'      => 9,
                'is_active'    => true,
            ],
            [
                'name'         => 'Plant & Prayer',
                'type'         => 'Halal',
                'city'         => 'Mandalay',
                'phone_number' => '+1922334455',
                'location'      => 'No.C-6/145, Manawhari Rd, Bet 62nd & 64th St, Mandalay',
                'email'        => 'plant-prayer@gmail.com',
                'website'      => 'https://plant-prayer.com',
                'image'        => 'logo/pizza-3010062_1280.jpg',
                'sort_id'      => 10,
                'is_active'    => true,
            ],
        ];

        foreach ($restaurants as $data) {
            Restaurant::create($data);
        }
    }
}
