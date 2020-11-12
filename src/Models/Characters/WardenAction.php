<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class WardenAction
 * 
 * @property int $wardenId
 * @property int $action
 *
 * @package reactmay\WoWModels\Characters
 */
class WardenAction extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'warden_action';
	protected $primaryKey = 'wardenId';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'wardenId' => 'int',
		'action' => 'int'
	];

	protected $fillable = [
		'action'
	];
}
