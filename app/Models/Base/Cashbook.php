<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cashbook
 * 
 * @property int $id
 * @property int $user_id
 * @property float $value
 * @property Carbon $value_date
 * @property string $title
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Base
 */
class Cashbook extends Model
{
	protected $table = 'cashbook';

	protected $casts = [
		'user_id' => 'int',
		'value' => 'float'
	];

	protected $dates = [
		'value_date'
	];
}
