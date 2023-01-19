<?php

namespace App\Models;

use App\Models\Base\CalendarCommitment as BaseCalendarCommitment;

class CalendarCommitment extends BaseCalendarCommitment
{
	protected $fillable = [
		'user_id',
		'calendar_id',
		'status'
	];
}
