<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function guide(){
        return $this->hasOne('App\TourGuide', 'guide_id');
    }

    public function tourist(){
        return $this->hasOne('App\Tourist', 'tourist_id');
    }

    public function attraction(){
        return $this->hasOne('App\Attraction', 'attraction_id');
    }
}
