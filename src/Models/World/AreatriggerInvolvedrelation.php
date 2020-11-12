<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class AreatriggerInvolvedrelation
 * 
 * @property int $id
 * @property int $quest
 *
 * @package reactmay\WoWModels\Characters
 */
class AreatriggerInvolvedrelation extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'areatrigger_involvedrelation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'quest' => 'int'
	];

	protected $fillable = [
		'quest'
	];
}
