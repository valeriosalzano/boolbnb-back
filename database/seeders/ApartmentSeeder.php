<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('email', '!=', 'badUser@test.it')->get();
  
        //first user with no services
        Apartment::factory()
            ->count(10)
            ->for($users[0])
            ->create();

        //second user with one service
        Apartment::factory()
            ->count(10)
            ->for($users[1])
            ->afterCreating(function (Apartment $apartment) {
                $service = Service::inRandomOrder()->first();
                $apartment->services()->attach($service);
                $apartment->save();
            })
            ->create();

        //third user with multiple services
        Apartment::factory()
            ->count(10)
            ->for($users[2])
            ->afterCreating(function (Apartment $apartment) {
                $services = Service::inRandomOrder()->limit(fake()->numberBetween(2, Service::count()))->get();
                $apartment->services()->attach($services);
                $apartment->save();
            })
            ->create();
    }

}
