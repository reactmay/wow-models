<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterSpell
 * 
 * @property int $guid
 * @property int $spell
 * @property int $active
 * @property int $disabled
 *
 * @package reactmay\WoWModels\Characters
 */
class CharacterSpell extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_spell';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'spell' => 'int',
		'active' => 'int',
		'disabled' => 'int'
	];

	protected $fillable = [
		'active',
		'disabled'
	];
}
