<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */

 //Factory testoviy foydalanish uchun soxta ma'lumotlar yaratib beradi. Factoryni yaratish uchun php artisan make:factory ModelNameFactory komandasi ishlatiladi
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> company(),
            'address' => fake() -> address(),
            'phone' => fake() -> e164PhoneNumber()
        ];
    }
}
