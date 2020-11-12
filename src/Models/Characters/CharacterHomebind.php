<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterHomebind
 * 
 * @property int $guid
 * @property int $mapId
 * @property int $zoneId
 * @property float $posX
 * @property float $posY
 * @property float $posZ
 *
 * @package reactmay\WoWModels\Characters
 */
class CharacterHomebind extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_homebind';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'mapId' => 'int',
		'zoneId' => 'int',
		'posX' => 'float',
		'posY' => 'float',
		'posZ' => 'float'
	];

	protected $fillable = [
		'mapId',
		'zoneId',
		'posX',
		'posY',
		'posZ'
	];

	public function character(){
		return $this->belongsTo(Character::class, 'guid', 'guid');
	}
}
