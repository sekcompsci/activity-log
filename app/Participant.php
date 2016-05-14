<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participant';
	protected $fillable = ['Date', 'Time', 'HID', 'MID'];
}
