<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class SpellRequired
 * 
 * @property int $spell_id
 * @property int $req_spell
 *
 * @package reactmay\WoWModels\Characters
 */
class SpellRequired extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'spell_required';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'spell_id' => 'int',
		'req_spell' => 'int'
	];
}
