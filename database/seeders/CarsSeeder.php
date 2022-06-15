<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("cars")->insert(
            [
                [
                    'company' => 'bmw',
                    'model' => '630i',
                    'color' => 'red',
                    'price' => 50000,
                ],
                [
                    'company' => \Illuminate\Support\Str::random(10),
                    'model' => '630i',
                    'color' => 'red',
                    'price' => 50000,
                ]
            ]
        );

    }
}
