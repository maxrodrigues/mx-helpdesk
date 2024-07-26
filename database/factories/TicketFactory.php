<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'status' => $this->faker->randomNumber(),
            'priority' => $this->faker->randomNumber(),

            'user_id' => User::factory(),
        ];
    }
}
