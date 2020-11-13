<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GroupInstance
 * 
 * @property int $guid
 * @property int $instance
 * @property int $permanent
 *
 * @package reactmay\WoWModels\Characters
 */
class GroupInstance extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'group_instance';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'instance' => 'int',
		'permanent' => 'int'
	];

	protected $fillable = [
		'permanent'
	];
}
