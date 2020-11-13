<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class GameEventModelEquip
 * 
 * @property int $eventEntry
 * @property int $guid
 * @property int $modelid
 * @property int $equipment_id
 *
 * @package Reactmay\WoWModels\Characters
 */
class GameEventModelEquip extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'game_event_model_equip';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'eventEntry' => 'int',
		'guid' => 'int',
		'modelid' => 'int',
		'equipment_id' => 'int'
	];

	protected $fillable = [
		'eventEntry',
		'modelid',
		'equipment_id'
	];
}
