<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace Vendor\reactmay\WoWModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class RbacLinkedPermission
 * 
 * @property int $id
 * @property int $linkedId
 * 
 * @property \reactmay\WoWModels\Auth\RbacPermission $rbac_permission
 *
 * @package reactmay\WoWModels\Auth
 */
class RbacLinkedPermission extends Eloquent
{
	protected $connection = 'auth';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'linkedId' => 'int'
	];

	public function rbac_permission()
	{
		return $this->belongsTo(\reactmay\WoWModels\Auth\RbacPermission::class, 'linkedId');
	}
}
