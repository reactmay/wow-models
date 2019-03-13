<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace reactmay\WoWModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class RbacAccountPermission
 * 
 * @property int $accountId
 * @property int $permissionId
 * @property bool $granted
 * @property int $realmId
 * 
 * @property \reactmay\WoWModels\Auth\Account $account
 * @property \reactmay\WoWModels\Auth\RbacPermission $rbac_permission
 *
 * @package reactmay\WoWModels\Auth
 */
class RbacAccountPermission extends Eloquent
{
	protected $connection = 'auth';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'accountId' => 'int',
		'permissionId' => 'int',
		'granted' => 'bool',
		'realmId' => 'int'
	];

	protected $fillable = [
		'granted'
	];

	public function account()
	{
		return $this->belongsTo(\reactmay\WoWModels\Auth\Account::class, 'accountId');
	}

	public function rbac_permission()
	{
		return $this->belongsTo(\reactmay\WoWModels\Auth\RbacPermission::class, 'permissionId');
	}
}
