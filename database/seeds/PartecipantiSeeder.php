<?php

use Illuminate\Database\Seeder;

class PartecipantiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Partecipante::class,50)- create();
    }
}
