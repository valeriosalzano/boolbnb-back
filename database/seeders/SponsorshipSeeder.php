<?php

namespace Database\Seeders;

use App\Models\Sponsorship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sponsorships')->insert([
            'name' => '24h',
            'price' => 2.99,
            'duration' => '24:00:00'
        ]);

        DB::table('sponsorships')->insert([
            'name' => '72h',
            'price' => 5.99,
            'duration' => '72:00:00'
        ]);

        DB::table('sponsorships')->insert([
            'name' => '144h',
            'price' => 9.99,
            'duration' => '144:00:00'
        ]);
    }
}
