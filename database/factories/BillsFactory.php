<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bills>
 */
class BillsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bill_name' => 'AB12345',
            'user_name' => 'llnhne',
            'email' => 'anhllph19505@fpt.edu.vn',
            'phone_number'=> '0838397376',
            'address' => '512 trần khát chân',
            'sum_price' => '3000000',
            'description' => 'không có ghi chú',
            'users_id' => 1,
            'pays_id' => 1
        ];
    }
}
