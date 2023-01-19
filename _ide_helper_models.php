<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Base{
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
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar query()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereDateType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereOnlyActiveMembers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereOnlyAdmins($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar wherePrivateDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereUserId($value)
 */
	class Calendar extends \Eloquent {}
}

namespace App\Models\Base{
/**
 * Class CalendarCommitment
 *
 * @property int $id
 * @property int $user_id
 * @property int $calendar_id
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment query()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment whereCalendarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment whereUserId($value)
 */
	class CalendarCommitment extends \Eloquent {}
}

namespace App\Models\Base{
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
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereValueDate($value)
 */
	class Cashbook extends \Eloquent {}
}

namespace App\Models\Base{
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
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee query()
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee whereAcceptedByUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee whereMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee whereYear($value)
 */
	class MonthlyFee extends \Eloquent {}
}

namespace App\Models\Base{
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
 * @property string|null $beername
 * @property int|null $no_monthly_fee
 * @package App\Models\Base
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdrCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdrCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdrPublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdrStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdrZip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBeername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEndMembership($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNoMonthlyFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermActivated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermCalendar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermFiles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermFinance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermNews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhonePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStartMembership($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Calendar
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon $start_date
 * @property string $date_type
 * @property int $public
 * @property string|null $private_description
 * @property int $only_active_members
 * @property int $only_admins
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar query()
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereDateType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereOnlyActiveMembers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereOnlyAdmins($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar wherePrivateDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Calendar whereUserId($value)
 */
	class Calendar extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CalendarCommitment
 *
 * @property int $id
 * @property int $user_id
 * @property int $calendar_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment query()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment whereCalendarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarCommitment whereUserId($value)
 */
	class CalendarCommitment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cashbook
 *
 * @property int $id
 * @property int $user_id
 * @property float $value
 * @property \Illuminate\Support\Carbon $value_date
 * @property string $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cashbook whereValueDate($value)
 */
	class Cashbook extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MonthlyFee
 *
 * @property int $id
 * @property int $user_id
 * @property int $accepted_by_user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $year
 * @property int $month
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee query()
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee whereAcceptedByUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee whereMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MonthlyFee whereYear($value)
 */
	class MonthlyFee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
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
 * @property string|null $start_membership
 * @property string|null $end_membership
 * @property string|null $beername
 * @property int|null $no_monthly_fee
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdrCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdrCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdrPublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdrStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdrZip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBeername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEndMembership($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNoMonthlyFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermActivated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermCalendar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermFiles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermFinance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermNews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhonePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStartMembership($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

