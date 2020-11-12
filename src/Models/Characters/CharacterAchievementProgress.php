<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterAchievementProgress
 * 
 * @property int $guid
 * @property int $criteria
 * @property int $counter
 * @property int $date
 *
 * @package reactmay\WoWModels\Characters
 */
class CharacterAchievementProgress extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_achievement_progress';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'criteria' => 'int',
		'counter' => 'int',
		'date' => 'int'
	];

	protected $fillable = [
		'counter',
		'date'
	];

	public function character(){
		return $this->belongsTo(Character::class, 'guid', 'guid');
	}
}
