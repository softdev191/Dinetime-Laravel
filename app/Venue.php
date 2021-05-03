<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
	protected $table = 'venues';
	public $primaryKey = 'venue_id';
	public $timestamps = true;
    public $incrementing = true;
}
