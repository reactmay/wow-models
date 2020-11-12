<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Channel
 * 
 * @property string $name
 * @property int $team
 * @property int $announce
 * @property int $ownership
 * @property string $password
 * @property string $bannedList
 * @property int $lastUsed
 *
 * @package reactmay\WoWModels\Characters
 */
class Channel extends Eloquent
{
	protected $connection = 'characters';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'team' => 'int',
		'announce' => 'int',
		'ownership' => 'int',
		'lastUsed' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'announce',
		'ownership',
		'password',
		'bannedList',
		'lastUsed'
	];
}
