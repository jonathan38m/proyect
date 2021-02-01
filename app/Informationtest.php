<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informationtest extends Model
{
    protected $table = 'informationsTest';
	protected $fillable = ['name', 'lastName', 'country', 'email'];
	protected $guarded = ['id'];

}
