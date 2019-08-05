<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Update
 * 
 * @property string $name
 * @property string $hash
 * @property string $state
 * @property \Carbon\Carbon $timestamp
 * @property int $speed
 *
 * @package reactmay\WoWModels\Characters
 */
class Update extends Eloquent
{
	protected $connection = 'world';
	protected $primaryKey = 'name';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'speed' => 'int'
	];

	protected $dates = [
		'timestamp'
	];

	protected $fillable = [
		'hash',
		'state',
		'timestamp',
		'speed'
	];
}
