<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CmCraftGain
 * 
 * @property int $spell
 * @property int $multiplier
 *
 * @package reactmay\WoWModels\Characters
 */
class CmCraftGain extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'cm_craft_gain';
	protected $primaryKey = 'spell';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'spell' => 'int',
		'multiplier' => 'int'
	];

	protected $fillable = [
		'multiplier'
	];
}
