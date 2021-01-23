<?php

namespace App;

use Illuminate\Database\Eloquent\Builder as Builder;
use Illuminate\Database\Eloquent\Model;

class Bookable  extends Model
{
    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    public function availbleFor($fromDate, $toDate) : bool {
        error_log(__FUNCTION__);

        return 0 === $this->bookings()->betweenDates($fromDate, $toDate)->count();
    }
}
