<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Partecipanti;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        DB::table('partecipanti')->delete();
        
        $this->call(PartecipanteTableSeeder::class);

        Model::reguard();
    }
}
{
	 

	// $partecipante = new App\Partecipante();
	// $partecipante->name = 'name';
   // $partecipante->surname = 'surname';
	// $partecipante->email = 'email';
	//$partecipante->telephone = 'telephone';
	//$partecipante->save();


}

