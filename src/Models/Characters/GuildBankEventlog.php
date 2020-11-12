<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Vendor\reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildBankEventlog
 * 
 * @property int $guildid
 * @property int $LogGuid
 * @property int $TabId
 * @property int $EventType
 * @property int $PlayerGuid
 * @property int $ItemOrMoney
 * @property int $ItemStackCount
 * @property int $DestTabId
 * @property int $TimeStamp
 *
 * @package reactmay\WoWModels\Characters
 */
class GuildBankEventlog extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'guild_bank_eventlog';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guildid' => 'int',
		'LogGuid' => 'int',
		'TabId' => 'int',
		'EventType' => 'int',
		'PlayerGuid' => 'int',
		'ItemOrMoney' => 'int',
		'ItemStackCount' => 'int',
		'DestTabId' => 'int',
		'TimeStamp' => 'int'
	];

	protected $fillable = [
		'EventType',
		'PlayerGuid',
		'ItemOrMoney',
		'ItemStackCount',
		'DestTabId',
		'TimeStamp'
	];

	public function guild(){
		return $this->belongsTo(Guild::class, 'guildid', 'guildid');
	}

	public function tab(){
		return $this->guild()->merge($this->belongsTo(GuildBankTab::class, 'TabId', 'TabId'));
	}

	public function character(){
		return $this->belongsTo(Character::class, 'PlayerGuid', 'guid');
	}
}
