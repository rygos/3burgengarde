<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Calendar
 * 
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property Carbon $start_date
 * @property string $date_type
 * @property int $public
 * @property string|null $private_description
 * @property int $only_active_members
 * @property int $only_admins
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Base
 */
class Calendar extends Model
{
	protected $table = 'calendar';

	protected $casts = [
		'user_id' => 'int',
		'public' => 'int',
		'only_active_members' => 'int',
		'only_admins' => 'int'
	];

	protected $dates = [
		'start_date'
	];
}
