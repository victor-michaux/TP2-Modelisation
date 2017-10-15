<?php

use Illuminate\Database\Seeder;

class CdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cd::class, 150)->create();
    }
}
