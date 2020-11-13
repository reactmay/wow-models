<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterQueststatusDaily
 * 
 * @property int $guid
 * @property int $quest
 * @property int $time
 *
 * @package Reactmay\WoWModels\Characters
 */
class CharacterQueststatusDaily extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_queststatus_daily';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'quest' => 'int',
		'time' => 'int'
	];

	protected $fillable = [
		'time'
	];

	public function character(){
		return $this->belongsTo(Character::class, 'guid', 'guid');
	}

	public function quest(){
		return $this->belongsTo(QuestTemplate::class, 'quest', 'ID');
	}
}
