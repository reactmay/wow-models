<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameobjectQueststarter
 * 
 * @property int $id
 * @property int $quest
 *
 * @package Reactmay\WoWModels\Characters
 */
class GameobjectQueststarter extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'gameobject_queststarter';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'quest' => 'int'
	];
}
