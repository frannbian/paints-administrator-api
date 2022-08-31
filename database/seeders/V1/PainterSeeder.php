<?php

namespace Database\Seeders\V1;

use Illuminate\Database\Seeder;
use App\Models\Api\V1\Painter;

class PainterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Painter::factory(10)->create();
    }
}
