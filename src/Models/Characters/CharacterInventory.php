<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterInventory
 * 
 * @property int $guid
 * @property int $bag
 * @property int $slot
 * @property int $item
 *
 * @package reactmay\WoWModels\Characters
 */
class CharacterInventory extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_inventory';
	protected $primaryKey = 'item';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'bag' => 'int',
		'slot' => 'int',
		'item' => 'int'
	];

	protected $fillable = [
		'guid',
		'bag',
		'slot'
	];

	public function character(){
		return $this->belongsTo(Character::class, 'guid', 'guid');
	}

	public function item(){
		return $this->belongsTo(ItemInstance::class, 'item', 'guid');
	}
}
