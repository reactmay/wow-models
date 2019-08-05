<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ItemLootMoney
 * 
 * @property int $container_id
 * @property int $money
 *
 * @package reactmay\WoWModels\Characters
 */
class ItemLootMoney extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'item_loot_money';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'container_id' => 'int',
		'money' => 'int'
	];

	protected $fillable = [
		'container_id',
		'money'
	];
}
