<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace reactmay\WoWModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Realmcharacter
 * 
 * @property int $realmid
 * @property int $acctid
 * @property int $numchars
 *
 * @package reactmay\WoWModels\Auth
 */
class Realmcharacter extends Eloquent
{
	protected $connection = 'auth';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'realmid' => 'int',
		'acctid' => 'int',
		'numchars' => 'int'
	];

	protected $fillable = [
		'numchars'
	];
}
