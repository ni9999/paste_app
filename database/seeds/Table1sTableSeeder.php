<?php

use Illuminate\Database\Seeder;

class Table1sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Table1::class, 5)->create();
    }
}
