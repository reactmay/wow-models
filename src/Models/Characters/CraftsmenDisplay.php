<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CraftsmenDisplay
 * 
 * @property int $guid
 * @property int $profession
 *
 * @package reactmay\WoWModels\Characters
 */
class CraftsmenDisplay extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'craftsmen_display';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'profession' => 'int'
	];
}
