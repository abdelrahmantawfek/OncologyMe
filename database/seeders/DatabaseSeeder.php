<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(AdminSeeder::class);
        // $this->call(Users::class);
        // $this->call(Posts::class);
        // $this->call(Departments::class);
        // $this->call(Categories::class);
        // $this->call(Subcategories::class);
        // $this->call(Tags::class);
        $this->call(PageSeeder::class);
        $this->call(TopicSeeder::class);
        $this->call(PostSeeder::class);
        // $this->call(ContactSeeder::class);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
