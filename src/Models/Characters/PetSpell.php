<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PetSpell
 * 
 * @property int $guid
 * @property int $spell
 * @property int $active
 *
 * @package reactmay\WoWModels\Characters
 */
class PetSpell extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'pet_spell';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'spell' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'active'
	];
}
