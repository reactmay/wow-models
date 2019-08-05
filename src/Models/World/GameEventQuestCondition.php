<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventQuestCondition
 * 
 * @property int $eventEntry
 * @property int $quest
 * @property int $condition_id
 * @property float $num
 *
 * @package reactmay\WoWModels\Characters
 */
class GameEventQuestCondition extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_event_quest_condition';
	protected $primaryKey = 'quest';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'quest' => 'int',
		'condition_id' => 'int',
		'num' => 'float'
	];

	protected $fillable = [
		'eventEntry',
		'condition_id',
		'num'
	];
}
