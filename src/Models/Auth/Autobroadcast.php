<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace Vendor\reactmay\WoWModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Autobroadcast
 * 
 * @property int $realmid
 * @property int $id
 * @property int $weight
 * @property string $text
 *
 * @package reactmay\WoWModels\Auth
 */
class Autobroadcast extends Eloquent
{
	protected $connection = 'auth';
	protected $table = 'autobroadcast';
	public $timestamps = false;

	protected $casts = [
		'realmid' => 'int',
		'weight' => 'int'
	];

	protected $fillable = [
		'weight',
		'text'
	];
}
