<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PlayerCommandCategory
 * 
 * @property int $id
 * @property int $profession
 * @property int $category
 * @property int $sub_category
 * @property string $name
 *
 * @package Reactmay\WoWModels\Characters
 */
class PlayerCommandCategory extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'player_command_category';
	public $timestamps = false;

	protected $casts = [
		'profession' => 'int',
		'category' => 'int',
		'sub_category' => 'int'
	];

	protected $fillable = [
		'profession',
		'category',
		'sub_category',
		'name'
	];
}
