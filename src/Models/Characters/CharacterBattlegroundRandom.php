<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterBattlegroundRandom
 * 
 * @property int $guid
 *
 * @package reactmay\WoWModels\Characters
 */
class CharacterBattlegroundRandom extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_battleground_random';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int'
	];
}
