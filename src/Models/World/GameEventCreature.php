<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventCreature
 * 
 * @property int $eventEntry
 * @property int $guid
 *
 * @package reactmay\WoWModels\Characters
 */
class GameEventCreature extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_event_creature';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'guid' => 'int'
	];
}
