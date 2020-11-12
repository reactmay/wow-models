<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CreatureQueststarter
 * 
 * @property int $id
 * @property int $quest
 *
 * @package reactmay\WoWModels\Characters
 */
class CreatureQueststarter extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'creature_queststarter';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'quest' => 'int'
	];
}
