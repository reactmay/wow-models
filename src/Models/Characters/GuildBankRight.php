<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildBankRight
 * 
 * @property int $guildid
 * @property int $TabId
 * @property int $rid
 * @property int $gbright
 * @property int $SlotPerDay
 *
 * @package reactmay\WoWModels\Characters
 */
class GuildBankRight extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'guild_bank_right';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guildid' => 'int',
		'TabId' => 'int',
		'rid' => 'int',
		'gbright' => 'int',
		'SlotPerDay' => 'int'
	];

	protected $fillable = [
		'gbright',
		'SlotPerDay'
	];

	public function guild(){
		return $this->belongsTo(Guild::class, 'guildid', 'guildid');
	}

	public function tab(){
		return $this->guild()->merge($this->belongsTo(GuildBankTab::class, 'TabId', 'TabId'));
	}
}
