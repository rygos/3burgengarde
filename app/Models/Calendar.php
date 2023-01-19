<?php

namespace App\Models;

use App\Models\Base\Calendar as BaseCalendar;

class Calendar extends BaseCalendar
{
	protected $fillable = [
		'user_id',
		'title',
		'description',
		'start_date',
		'date_type',
		'public',
		'private_description',
		'only_active_members',
		'only_admins'
	];
}
