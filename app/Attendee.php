<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Attendee extends Model
{
    // public function complete() {
    //     $this->Attendance = true;
    //     $this->save();
    use Searchable;
    // }
}
