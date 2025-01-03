<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Blogcat;
use App\Models\Carrental;
use App\Models\Carrentalcat;
use App\Models\Tourpackage;
use App\Models\Tourpackagecat;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Blog::factory(10)->create();

        // User::factory()->create([
        //     'username' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::firstOrCreate([
            'id' => 1,
            'username' => 'ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => 'ahmad'
        ]);

        // Blogcat::create(['name' => 'panorama alam', 'slug' => 'panorama-alam']);
        Blogcat::firstOrCreate([
            'id' => 1,
            'name' => 'panorama blog',
            'slug' => 'panorama-blog'
        ]);

        Carrentalcat::firstOrCreate([
            'id' => 1,
            'name' => 'panorama car rental',
            'slug' => 'panorama-car-rental'
        ]);

        Tourpackagecat::firstOrCreate([
            'id' => 1,
            'name' => 'panorama tour package',
            'slug' => 'panorama-tour-package'
        ]);

        Blog::firstOrCreate([
            'id' => 1,
            'title' => 'panorama alam blog',
            'slug' => 'panorama-alam-blog',
            'content' => 'panorama alam content',
            'blogcat_id' => 1,
            'user_id' => 1
        ]);

        Carrental::firstOrCreate([
            'id' => 1,
            'brand_name' => 'panorama alam carrental',
            'slug' => 'panorama-alam-carrental',
            'license_plate' => 'DR',
            'rental_price' => 200000,
            'color' => 'black',
            'policy' => 'brand name policy',
            'information' => 'brand name information',
            'carrentalcat_id' => 1,
            'user_id' => 1
        ]);

        $tour1 = Tourpackage::Create([
            'id' => 1,
            'name' => 'panorama alam tour package',
            'slug' => 'panorama-alam-tour-package',
            'price' => 2000000,
            'detail' => 'panorama alam tour detail',
            'status' => 'active',
            'itenary_description' => 'panorama alam itenary description',
            'itenary_detail' => 'panorama alam itenary detail',
            'policy_description' => 'panorama alam policy description',
            'policy_detail' => 'panorama alam policy detail',
            'info_description' => 'panorama alam info description',
            'info_detail' => 'panorama alam info detail',
            'tourpackagecat_id' => 1,
            'user_id' => 1
        ]);
    }
}
