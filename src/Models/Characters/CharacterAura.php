<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterAura
 * 
 * @property int $guid
 * @property int $casterGuid
 * @property int $itemGuid
 * @property int $spell
 * @property int $effectMask
 * @property int $recalculateMask
 * @property int $stackCount
 * @property int $amount0
 * @property int $amount1
 * @property int $amount2
 * @property int $base_amount0
 * @property int $base_amount1
 * @property int $base_amount2
 * @property int $maxDuration
 * @property int $remainTime
 * @property int $remainCharges
 *
 * @package reactmay\WoWModels\Characters
 */
class CharacterAura extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_aura';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'casterGuid' => 'int',
		'itemGuid' => 'int',
		'spell' => 'int',
		'effectMask' => 'int',
		'recalculateMask' => 'int',
		'stackCount' => 'int',
		'amount0' => 'int',
		'amount1' => 'int',
		'amount2' => 'int',
		'base_amount0' => 'int',
		'base_amount1' => 'int',
		'base_amount2' => 'int',
		'maxDuration' => 'int',
		'remainTime' => 'int',
		'remainCharges' => 'int'
	];

	protected $fillable = [
		'recalculateMask',
		'stackCount',
		'amount0',
		'amount1',
		'amount2',
		'base_amount0',
		'base_amount1',
		'base_amount2',
		'maxDuration',
		'remainTime',
		'remainCharges'
	];

	public function character(){
		return $this->belongsTo(Character::class, 'guid', 'guid');
	}

	public function caster(){
		return $this->belongsTo(Character::class, 'casterGuid', 'guid');
	}

	public function spell(){
		return $this->belongsTo(SpellDbc::class, 'spell', 'Id');
	}
}