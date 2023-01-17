<?php

namespace App\Models;

use App\Models\Base\MonthlyFee as BaseMonthlyFee;

class MonthlyFee extends BaseMonthlyFee
{
	protected $fillable = [
		'user_id',
		'accepted_by_user_id'
	];
}
