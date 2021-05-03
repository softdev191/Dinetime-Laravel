<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
	protected $table = 'deal';
	public $primaryKey = 'deal_id';
	public $timestamps = true;
    public $incrementing = true;
}
