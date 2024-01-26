<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // add one specific user named john doe
        // $user = User::factory()->create([
        //     'name' => 'John Doe',
        // ]);

        Post::factory(5)->create([
            // 'user_id' => $user->id,
            // 'user_id' => User::factory(),
        ]);
    }
}
