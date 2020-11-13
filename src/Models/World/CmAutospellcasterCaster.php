<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CmAutospellcasterCaster
 * 
 * @property int $guid
 * @property int $type
 * @property int $category
 *
 * @package reactmay\WoWModels\Characters
 */
class CmAutospellcasterCaster extends Eloquent
{
	protected $connection = 'world';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'type' => 'int',
		'category' => 'int'
	];
}
