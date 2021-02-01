<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    /**
     * Get the location that owns the course.
     */
    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    /**
     * Get the options that owns the course.
     */
    public function options()
    {
        return $this->hasMany('App\Option');
    }
}
