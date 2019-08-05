<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class LinkedRespawn
 * 
 * @property int $guid
 * @property int $linkedGuid
 * @property int $linkType
 *
 * @package reactmay\WoWModels\Characters
 */
class LinkedRespawn extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'linked_respawn';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'linkedGuid' => 'int',
		'linkType' => 'int'
	];

	protected $fillable = [
		'linkedGuid'
	];
}
