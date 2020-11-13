<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterBanned
 * 
 * @property int $guid
 * @property int $bandate
 * @property int $unbandate
 * @property string $bannedby
 * @property string $banreason
 * @property int $active
 *
 * @package reactmay\WoWModels\Characters
 */
class CharacterBanned extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_banned';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'bandate' => 'int',
		'unbandate' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'unbandate',
		'bannedby',
		'banreason',
		'active'
	];

	public function character(){
		return $this->belongsTo(Character::class, 'guid', 'guid');
	}

	public function bannedBy(){
		return $this->belongsTo(Character::class, 'bannedby', 'guid');
	}
}
