<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MonthlyFee
 * 
 * @property int $id
 * @property int $user_id
 * @property int $accepted_by_user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $year
 * @property int $month
 *
 * @package App\Models\Base
 */
class MonthlyFee extends Model
{
	protected $table = 'monthly_fee';

	protected $casts = [
		'user_id' => 'int',
		'accepted_by_user_id' => 'int',
		'year' => 'int',
		'month' => 'int'
	];
}
