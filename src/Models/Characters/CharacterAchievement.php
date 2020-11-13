<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterAchievement
 * 
 * @property int $guid
 * @property int $achievement
 * @property int $date
 *
 * @package reactmay\WoWModels\Characters
 */
class CharacterAchievement extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_achievement';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'achievement' => 'int',
		'date' => 'int'
	];

	protected $fillable = [
		'date'
	];

	public function character(){
		return $this->belongsTo(Character::class, 'guid', 'guid');
	}
}
