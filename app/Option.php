<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

  /**
   * Get the course that owns the option.
   */
  public function course()
  {
      return $this->belongsTo('App\Course');
  }


  /**
   * The bookings that belong to the option.
   */
  public function bookings()
  {
      return $this->belongsToMany('App\Booking')
      ->withPivot('weeks', 'from', 'comment', 'price')
      ->withTimestamps();
  }
}
