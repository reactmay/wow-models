<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterQueststatusSeasonal
 * 
 * @property int $guid
 * @property int $quest
 * @property int $event
 *
 * @package reactmay\WoWModels\Characters
 */
class CharacterQueststatusSeasonal extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_queststatus_seasonal';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'quest' => 'int',
		'event' => 'int'
	];

	protected $fillable = [
		'event'
	];

	public function character(){
		return $this->belongsTo(Character::class, 'guid', 'guid');
	}

	public function quest(){
		return $this->belongsTo(QuestTemplate::class, 'quest', 'ID');
	}
}
