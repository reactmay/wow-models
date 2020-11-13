<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PlayerCommandObject
 * 
 * @property int $guid
 * @property int $category
 *
 * @package Reactmay\WoWModels\Characters
 */
class PlayerCommandObject extends Eloquent
{
	protected $connection = 'world';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'category' => 'int'
	];

	protected $fillable = [
		'category'
	];
}
