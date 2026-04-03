<?php

namespace Database\Seeders;

use App\Models\Component;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = \Faker\Factory::create();
        $components = [
            [
                'name' => 'navbar',
                'position' => 1,
                'product_id' => 1,
                'data' => [
                    'title' => 'ShopSphere',
                    'menus' => [
                        'home',
                        'hero',
                        'features',
                        'overview',
                        'specs',
                        'tutorial',
                        'gallery',
                        'contact',
                    ],
                ]
            ],
            [
                'name' => 'hero',
                'position' => 2,
                'product_id' => 1,
                'data' => [
                    'image' => 'header_image.png',
                    'title' => 'Performance Meets Innovation',
                    'description' => 'Engineered for performance, designed for creators.',
                    'button_color' => $faker->randomElement([
                        'primary',
                        'secondary',
                        'success',
                        'danger',
                        'warning',
                        'info',
                        'light',
                        'dark',
                        'link'
                    ]),
                    'button_title' => 'Buy now',
                    'price' => $faker->numberBetween(100, 10000),
                    'currency' => $faker->randomElement(['USD', 'EUR', 'BDT']),
                ],
            ],
            [
                'name' => 'features',
                'position' => 3,
                'product_id' => 1,
                'data' => [
                    'title' => 'Powerful Features',
                    'description' => 'Discover the cutting-edge technology that powers every detail.',
                    'attributes' => [
                        [
                            'icon' => 'fa-regular fa-camera',
                            'title' => 'Camera',
                            'description' => '20 MP Resolution, 4k at 60 FPS',
                        ],
                        [
                            'icon' => 'fas fa-battery-full',
                            'title' => 'Battery',
                            'description' => 'Up to 90 Minutes Flight Time',
                        ],
                        [
                            'icon' => 'fas fa-check-square',
                            'title' => 'Control',
                            'description' => '2 KM of Smooth Range',
                        ],
                        [
                            'icon' => 'fas fa-tachometer-alt',
                            'title' => 'Speed',
                            'description' => 'Fly up to 30 MPH',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'overview',
                'position' => 4,
                'product_id' => 1,
                'data' => [
                    'title' => 'At a Glance',
                    'description' => 'Powerful technology built for creators and explorers. Seamless design meets cutting‑edge functionality. Unlock speed, control, and endless possibilities',
                    'image' => 'about.png',
                    'button_color' => $faker->randomElement([
                        'primary',
                        'secondary',
                        'success',
                        'danger',
                        'warning',
                        'info',
                        'light',
                        'dark',
                        'link'
                    ]),
                    'button_title' => 'Read more...',
                ]
            ],
            [
                'name' => 'specs',
                'position' => 4,
                'product_id' => 1,
                'data' => [
                    'title' => 'Product Specs & Details',
                    'description' => 'Explore the technical details that define performance and reliability. A closer look at the numbers behind innovation.',
                    'image' => 'about.png',
                ]
            ],
            // ['name' => 'tutorial', 'position' => 5, 'product_id' => 1, 'data' => []],
            // ['name' => 'gallery', 'position' => 6, 'product_id' => 1, 'data' => []],
            // ['name' => 'contact', 'position' => 7, 'product_id' => 1, 'data' => []],
            // ['name' => 'footer', 'position' => 8, 'product_id' => 1, 'data' => []],
        ];

        foreach ($components as $component) {
            Component::create($component);
        }
    }
}
