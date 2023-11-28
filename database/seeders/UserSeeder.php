<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user without apartments
        User::factory()->create([
            'email' => 'badUser@test.it'
        ]);

        User::factory()
            ->count(3)
            ->sequence(fn (Sequence $sequence) => ['email' => 'testUser'.($sequence->index?$sequence->index:'').'@test.it'])
            ->create();
    }
}
