<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    protected $model = Admin::class;
    
    public function definition(): array
    {
        return [
            'username' => $this->faker->unique()->userName(),
            'password_hash' => Hash::make('password'), //default password
        ];
    }
}
