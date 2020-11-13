<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ItemSoulboundTradeDatum
 * 
 * @property int $itemGuid
 * @property string $allowedPlayers
 *
 * @package reactmay\WoWModels\Characters
 */
class ItemSoulboundTradeDatum extends Eloquent
{
	protected $connection = 'characters';
	protected $primaryKey = 'itemGuid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'itemGuid' => 'int'
	];

	protected $fillable = [
		'allowedPlayers'
	];

	public function getAllowedPlayersAttribute($value){
		$players = [];
		foreach (explode(' ', $this->allowedPlayers) as $playerID){
			$players[] = Character::find($playerID);
		}
		return $players;
	}

	public function item(){
		return $this->belongsTo(ItemInstance::class, 'itemGuid', 'guid');
	}
}
