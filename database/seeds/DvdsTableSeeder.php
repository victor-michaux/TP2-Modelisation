<?php

use Illuminate\Database\Seeder;

class DvdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Dvd::class, 150)->create();
    }
}
