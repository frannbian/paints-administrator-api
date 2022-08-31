<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            
        $this->call([
            'Database\Seeders\V1\UserSeeder',
            'Database\Seeders\V1\PainterSeeder',
            'Database\Seeders\V1\CountrySeeder',
            'Database\Seeders\V1\PaintSeeder'
        ]);
    }
}
