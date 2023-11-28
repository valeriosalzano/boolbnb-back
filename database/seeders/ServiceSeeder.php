<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = ['WiFi', 'Posto Macchina', 'Piscina', 'Portineria', 'Sauna', 'Vista Mare'];

        foreach($services as $service){
            DB::table('services')->insert([
                'name' => $service
            ]);
        }
    }
}
