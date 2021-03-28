<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designer')->insert([
            [
                'name' => 'Albert Uderzo',
                'date_of_Birth' => 1927,
                'nationality' => 'french',
            ],
            [
                'name' => 'Morris',
                'date_of_Birth' => 1923,
                'nationality' => 'Belgian'
            ],
            [
                'name' => 'Zep',
                'date_of_Birth' => 1967,
                'nationality' => 'Swiss'
            ],
        ]);
    }
}