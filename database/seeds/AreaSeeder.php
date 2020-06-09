<?php

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Area::create([
            'label' => 'Kiev Area',
            'name' => 'kiev_area'
        ]);

        Area::create([
            'label' => 'Moscow Area',
            'name' => 'moscow_area'
        ]);

        Area::create([
            'label' => 'New York Area',
            'name' => 'new_york_area'
        ]);
    }
}
