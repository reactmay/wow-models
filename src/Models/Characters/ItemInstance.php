<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ItemInstance
 * 
 * @property int $guid
 * @property int $itemEntry
 * @property int $owner_guid
 * @property int $creatorGuid
 * @property int $giftCreatorGuid
 * @property int $count
 * @property int $duration
 * @property string $charges
 * @property int $flags
 * @property string $enchantments
 * @property int $randomPropertyId
 * @property int $durability
 * @property int $playedTime
 * @property string $text
 *
 * @package reactmay\WoWModels\Characters
 */
class ItemInstance extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'item_instance';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'itemEntry' => 'int',
		'owner_guid' => 'int',
		'creatorGuid' => 'int',
		'giftCreatorGuid' => 'int',
		'count' => 'int',
		'duration' => 'int',
		'flags' => 'int',
		'randomPropertyId' => 'int',
		'durability' => 'int',
		'playedTime' => 'int'
	];

	protected $fillable = [
		'itemEntry',
		'owner_guid',
		'creatorGuid',
		'giftCreatorGuid',
		'count',
		'duration',
		'charges',
		'flags',
		'enchantments',
		'randomPropertyId',
		'durability',
		'playedTime',
		'text'
	];

	public function owner(){
		return $this->belongsTo(Character::class, 'owner_guid', 'guid');
	}

	public function creator(){
		return $this->belongsTo(Character::class, 'creatorGuid', 'guid');
	}

	public function giftCreator(){
		return $this->belongsTo(Character::class, 'giftCreatorGuid', 'guid');
	}

	public function itemTemplate(){
		return $this->belongsTo(ItemTemplate::class, 'itemEntry', 'entry');
	}
}
