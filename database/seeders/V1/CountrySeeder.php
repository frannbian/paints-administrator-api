<?php

namespace Database\Seeders\V1;

use Illuminate\Database\Seeder;
use DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'name' => 'Argentina',
            'code' => 'ARG',
        ]);

        DB::table('countries')->insert([
            'name' => 'Uruguay',
            'code' => 'Uru',
        ]);
    }
}
