<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AccountInstanceTime
 * 
 * @property int $accountId
 * @property int $instanceId
 * @property int $releaseTime
 *
 * @package reactmay\WoWModels\Characters
 */
class AccountInstanceTime extends Eloquent
{
	protected $connection = 'characters';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'accountId' => 'int',
		'instanceId' => 'int',
		'releaseTime' => 'int'
	];

	protected $fillable = [
		'releaseTime'
	];

	public function account(){
		return $this->belongsTo(Account::class, 'accountId');
	}
}
