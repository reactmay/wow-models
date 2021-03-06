<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace Reactmay\WoWModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class RbacLinkedPermission
 * 
 * @property int $id
 * @property int $linkedId
 * 
 * @property \Reactmay\WoWModels\Auth\RbacPermission $rbac_permission
 *
 * @package Reactmay\WoWModels\Auth
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
		return $this->belongsTo(\Reactmay\WoWModels\Auth\RbacPermission::class, 'linkedId');
	}
}
