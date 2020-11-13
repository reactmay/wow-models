<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventSeasonalQuestrelation
 * 
 * @property int $questId
 * @property int $eventEntry
 *
 * @package reactmay\WoWModels\Characters
 */
class GameEventSeasonalQuestrelation extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_event_seasonal_questrelation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'questId' => 'int',
		'eventEntry' => 'int'
	];
}
