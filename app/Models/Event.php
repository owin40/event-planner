<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'description', 'start_datetime', 'end_datetime'];

    public function attendees()
    {
        return $this->hasMany(Attendee::class);
    }
}
