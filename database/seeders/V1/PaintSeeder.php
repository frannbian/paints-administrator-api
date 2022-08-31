<?php

namespace Database\Seeders\V1;

use Illuminate\Database\Seeder;
use App\Models\Api\V1\Paint;

class PaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        Paint::factory(100)->create();
    }
}
