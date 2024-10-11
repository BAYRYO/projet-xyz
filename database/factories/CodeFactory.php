<?php

namespace Database\Factories;

use App\Models\User;
use App\Services\CodeService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Code>
 */
class CodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => CodeService::generate(),
            'host_id' => User::factory(),
            'guest_id' => null,
            'consumed_at' => null,
        ];
    }

    public function consumed(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'guest_id' => User::factory(),
                'consumed_at' => fake()->dateTimeThisMonth(),
            ];
        });
    }
}
