<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Bugreport
 * 
 * @property int $id
 * @property string $type
 * @property string $content
 *
 * @package Reactmay\WoWModels\Characters
 */
class Bugreport extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'bugreport';
	public $timestamps = false;

	protected $fillable = [
		'type',
		'content'
	];
}
