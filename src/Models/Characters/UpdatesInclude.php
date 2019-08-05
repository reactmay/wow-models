<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

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
	protected $connection = 'characters';
	protected $table = 'updates_include';
	protected $primaryKey = 'path';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'state'
	];
}
