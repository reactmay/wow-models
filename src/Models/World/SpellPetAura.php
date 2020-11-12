<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellPetAura
 * 
 * @property int $spell
 * @property int $effectId
 * @property int $pet
 * @property int $aura
 *
 * @package reactmay\WoWModels\Characters
 */
class SpellPetAura extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'spell' => 'int',
		'effectId' => 'int',
		'pet' => 'int',
		'aura' => 'int'
	];

	protected $fillable = [
		'aura'
	];
}
