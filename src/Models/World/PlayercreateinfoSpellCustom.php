<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PlayercreateinfoSpellCustom
 * 
 * @property int $racemask
 * @property int $classmask
 * @property int $Spell
 * @property string $Note
 *
 * @package reactmay\WoWModels\Characters
 */
class PlayercreateinfoSpellCustom extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'playercreateinfo_spell_custom';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'racemask' => 'int',
		'classmask' => 'int',
		'Spell' => 'int'
	];

	protected $fillable = [
		'Note'
	];
}
