<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace Reactmay\WoWModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class RbacDefaultPermission
 * 
 * @property int $secId
 * @property int $permissionId
 * @property int $realmId
 * 
 * @property \reactmay\WoWModels\Auth\RbacPermission $rbac_permission
 *
 * @package reactmay\WoWModels\Auth
 */
class RbacDefaultPermission extends Eloquent
{
	protected $connection = 'auth';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'secId' => 'int',
		'permissionId' => 'int',
		'realmId' => 'int'
	];

	public function rbac_permission()
	{
		return $this->belongsTo(\reactmay\WoWModels\Auth\RbacPermission::class, 'permissionId');
	}
}
