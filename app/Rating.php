<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
	protected $table = 'rating';
	public $primaryKey = 'rate_id';
	public $timestamps = true;
    public $incrementing = true;
}
