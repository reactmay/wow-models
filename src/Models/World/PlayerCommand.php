<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PlayerCommand
 * 
 * @property int $id
 * @property int $category
 * @property int $object_guid
 * @property int $count
 * @property int $money_type
 * @property int $cost
 * @property int $owner
 *
 * @package reactmay\WoWModels\Characters
 */
class PlayerCommand extends Eloquent
{
	protected $connection = 'world';
	public $timestamps = false;

	protected $casts = [
		'category' => 'int',
		'object_guid' => 'int',
		'count' => 'int',
		'money_type' => 'int',
		'cost' => 'int',
		'owner' => 'int'
	];

	protected $fillable = [
		'category',
		'object_guid',
		'count',
		'money_type',
		'cost',
		'owner'
	];
}
