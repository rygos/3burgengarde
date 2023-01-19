<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CalendarCommitment
 * 
 * @property int $id
 * @property int $user_id
 * @property int $calendar_id
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Base
 */
class CalendarCommitment extends Model
{
	protected $table = 'calendar_commitment';

	protected $casts = [
		'user_id' => 'int',
		'calendar_id' => 'int',
		'status' => 'int'
	];
}
