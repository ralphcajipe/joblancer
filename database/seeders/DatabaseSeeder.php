<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User; // Add this line

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id,
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet, 
        //     consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
        //     labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
        //     exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        //     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
        //     eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
        //     in culpa qui officia deserunt mollit anim id est laborum.',
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet, 
        //     consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
        //     labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
        //     exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        //     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
        //     eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
        //     in culpa qui officia deserunt mollit anim id est laborum.',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
