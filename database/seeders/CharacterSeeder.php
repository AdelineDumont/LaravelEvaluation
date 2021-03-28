<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('character')->insert([
            [
                'name' => 'Astérix',
                'year_of_Creation' => 1959,
                'affiliate_Comic' => 'Astérix et Obélix',
                'designer_id' => 1,
            ],
            [
                'name' => 'Lucky Luke',
                'year_of_Creation' => 1946,
                'affiliate_Comic' => 'Lucky Luke',
                'designer_id' => 2,
            ],
            [
                'name' => 'Nadia',
                'year_of_Creation' => 1993,
                'affiliate_Comic' => 'Titeuf',
                'designer_id' => 3,
            ],
        ]);
    }
}