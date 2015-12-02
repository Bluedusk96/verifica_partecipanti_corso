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
    	factory(App\Partecipante::class,50)->create();
    	/*
    	$partecipante = new App\Partecipante();
    	$partecipante->name = 'Name';
    	$partecipante->surname = 'Surname';
    	$partecipante->email = 'Email';
    	$partecipante->telephone = 'Telephone';
    	$partecipante->save();
    	*/
    }
}
