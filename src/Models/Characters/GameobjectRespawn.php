<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GameobjectRespawn
 * 
 * @property int $guid
 * @property int $respawnTime
 * @property int $mapId
 * @property int $instanceId
 *
 * @package Reactmay\WoWModels\Characters
 */
class GameobjectRespawn extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'gameobject_respawn';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'respawnTime' => 'int',
		'mapId' => 'int',
		'instanceId' => 'int'
	];

	protected $fillable = [
		'respawnTime',
		'mapId'
	];
}
