<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	protected $table = 'admin_users';
	public $primaryKey = 'id';
	public $timestamps = true;
    public $incrementing = true;
}
