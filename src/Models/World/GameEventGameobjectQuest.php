<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventGameobjectQuest
 * 
 * @property int $eventEntry
 * @property int $id
 * @property int $quest
 *
 * @package Reactmay\WoWModels\Characters
 */
class GameEventGameobjectQuest extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_event_gameobject_quest';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'id' => 'int',
		'quest' => 'int'
	];
}
