<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int|null $perm_activated
 * @property int|null $perm_admin
 * @property int|null $perm_finance
 * @property int|null $perm_calendar
 * @property int|null $perm_files
 * @property int|null $perm_news
 * @property string|null $adr_street
 * @property string|null $adr_zip
 * @property string|null $adr_city
 * @property string|null $adr_country
 * @property int|null $adr_public
 * @property string|null $phone_home
 * @property string|null $phone_mobile
 * @property int|null $phone_public
 * @property Carbon|null $start_membership
 * @property Carbon|null $end_membership
 *
 * @package App\Models\Base
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'perm_activated' => 'int',
		'perm_admin' => 'int',
		'perm_finance' => 'int',
		'perm_calendar' => 'int',
		'perm_files' => 'int',
		'perm_news' => 'int',
		'adr_public' => 'int',
		'phone_public' => 'int'
	];

	protected $dates = [
		'email_verified_at',
		'start_membership',
		'end_membership'
	];
}
