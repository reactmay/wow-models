<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class ItemDisplayInfo
 * 
 * @property int $id
 * @property string $icon_name
 *
 * @package reactmay\WoWModels\Characters
 */
class ItemDisplayInfo extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'item_display_info';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'icon_name'
	];
}
