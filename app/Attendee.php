<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    public function complete() {
        $this->Attendance = true;
        $this->save();

    }
}
