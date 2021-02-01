<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformationForm extends Model
{

    protected $table = 'information';
    protected $fillable = ['name', 'subject', 'email', 'message'];
    protected $guarded = ['id'];
}
