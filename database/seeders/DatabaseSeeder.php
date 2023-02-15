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
        \App\Models\User::factory(10)->create();


        // Barcha Seederlar DatabaseSeeder ning bolalari hisoblanadi, shuning uchun seederlarni DatabaseSeederda chaqiriladi. DatabaseSeederni ishga tushirish uchun php artisan db:seed komandasidan foydalaniladi
        
        $this->call([
            CompanySeeder::class
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
