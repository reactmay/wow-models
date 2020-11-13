<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class AreatriggerScript
 * 
 * @property int $entry
 * @property string $ScriptName
 *
 * @package reactmay\WoWModels\Characters
 */
class AreatriggerScript extends Eloquent
{
	protected $connection = 'world';
	protected $primaryKey = 'entry';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int'
	];

	protected $fillable = [
		'ScriptName'
	];
}
