<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PoolPool
 * 
 * @property int $pool_id
 * @property int $mother_pool
 * @property float $chance
 * @property string $description
 *
 * @package reactmay\WoWModels\Characters
 */
class PoolPool extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'pool_pool';
	protected $primaryKey = 'pool_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pool_id' => 'int',
		'mother_pool' => 'int',
		'chance' => 'float'
	];

	protected $fillable = [
		'mother_pool',
		'chance',
		'description'
	];
}
