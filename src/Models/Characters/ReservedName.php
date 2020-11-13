<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ReservedName
 * 
 * @property string $name
 *
 * @package Reactmay\WoWModels\Characters
 */
class ReservedName extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'reserved_name';
	protected $primaryKey = 'name';
	public $incrementing = false;
	public $timestamps = false;
}
