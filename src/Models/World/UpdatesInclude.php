<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class UpdatesInclude
 * 
 * @property string $path
 * @property string $state
 *
 * @package reactmay\WoWModels\Characters
 */
class UpdatesInclude extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'updates_include';
	protected $primaryKey = 'path';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'state'
	];
}
