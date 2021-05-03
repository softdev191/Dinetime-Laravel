<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
	protected $table = 'reservation';
	public $primaryKey = 'reservation_id';
	public $timestamps = true;
    public $incrementing = true;
}
