<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterInstance
 * 
 * @property int $guid
 * @property int $instance
 * @property int $permanent
 * @property int $extendState
 *
 * @package Reactmay\WoWModels\Characters
 */
class CharacterInstance extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_instance';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'instance' => 'int',
		'permanent' => 'int',
		'extendState' => 'int'
	];

	protected $fillable = [
		'permanent',
		'extendState'
	];
}
