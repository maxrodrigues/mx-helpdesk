<?php

namespace Database\Factories;

use App\Models\Reply;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ReplyFactory extends Factory
{
    protected $model = Reply::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'content' => $this->faker->word(),

            'ticket_id' => Ticket::factory(),
            'user_id' => User::factory(),
        ];
    }
}
