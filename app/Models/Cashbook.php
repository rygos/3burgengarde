<?php

namespace App\Models;

use App\Models\Base\Cashbook as BaseCashbook;

class Cashbook extends BaseCashbook
{
	protected $fillable = [
		'user_id',
		'value',
		'value_date',
		'title',
		'description'
	];
}
