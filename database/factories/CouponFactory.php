<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupon>
 */
class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'coupon_name' => $this->faker->name(),
            'coupon_time' => '50',
            'coupon_conditon' => '1',
            'coupon_number' => '70000',
            'coupon_code' => $this->faker->name(),
        ];
    }
}
