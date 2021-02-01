<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    protected $fillable = ['name', 'alias'];

    /**
     * Get the courses for the location.
     */
    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
