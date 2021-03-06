<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PoolGameobject
 * 
 * @property int $guid
 * @property int $pool_entry
 * @property float $chance
 * @property string $description
 *
 * @package Reactmay\WoWModels\Characters
 */
class PoolGameobject extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'pool_gameobject';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'pool_entry' => 'int',
		'chance' => 'float'
	];

	protected $fillable = [
		'pool_entry',
		'chance',
		'description'
	];
}
