<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partecipante extends Model
{
	protected $table = 'partecipanti';
	protected $fillable = ['name', 'email', 'surname', 'telephone'];
}
