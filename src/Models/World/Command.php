<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Command
 * 
 * @property string $name
 * @property int $permission
 * @property string $help
 *
 * @package reactmay\WoWModels\Characters
 */
class Command extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'command';
	protected $primaryKey = 'name';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'permission' => 'int'
	];

	protected $fillable = [
		'permission',
		'help'
	];
}
