<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([

            [
                'name' => 'Dhaka'
            ],
            [
                'name' => 'Chattogram'
            ],
            [
                'name' => 'Sylhet'
            ]

        ]
            
        );
    }
}
