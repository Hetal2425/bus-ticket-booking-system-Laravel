<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelReview extends Model
{
    public function hotel() {
      return $this->belongsTo('App\Hotel');
    }

    public function user() {
      return $this->belongsTo('App\User');
    }
}
