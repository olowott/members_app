<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\GroupSeeder;
use Database\Seeders\HduhauSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\MaritalstatusSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(CountrySeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(HduhauSeeder::class);
        $this->call(MaritalstatusSeeder::class);
    }
}
