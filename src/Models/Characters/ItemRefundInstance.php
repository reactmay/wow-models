<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ItemRefundInstance
 * 
 * @property int $item_guid
 * @property int $player_guid
 * @property int $paidMoney
 * @property int $paidExtendedCost
 *
 * @package Reactmay\WoWModels\Characters
 */
class ItemRefundInstance extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'item_refund_instance';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'item_guid' => 'int',
		'player_guid' => 'int',
		'paidMoney' => 'int',
		'paidExtendedCost' => 'int'
	];

	protected $fillable = [
		'paidMoney',
		'paidExtendedCost'
	];
}
