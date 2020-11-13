<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PlayerFactionchangeQuest
 * 
 * @property int $alliance_id
 * @property int $horde_id
 *
 * @package Reactmay\WoWModels\Characters
 */
class PlayerFactionchangeQuest extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'alliance_id' => 'int',
		'horde_id' => 'int'
	];
}
