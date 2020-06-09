<?php

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'label' => 'Moscow',
            'name' => 'moscow'
        ]);

        City::create([
            'label' => 'Kiev',
            'name' => 'kiev'
        ]);

        City::create([
            'label' => 'New York',
            'name' => 'new_york'
        ]);
    }
}
