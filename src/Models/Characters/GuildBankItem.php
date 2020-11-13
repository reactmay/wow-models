<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildBankItem
 * 
 * @property int $guildid
 * @property int $TabId
 * @property int $SlotId
 * @property int $item_guid
 *
 * @package Reactmay\WoWModels\Characters
 */
class GuildBankItem extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'guild_bank_item';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guildid' => 'int',
		'TabId' => 'int',
		'SlotId' => 'int',
		'item_guid' => 'int'
	];

	protected $fillable = [
		'item_guid'
	];

	public function guild(){
		return $this->belongsTo(Guild::class, 'guildid', 'guildid');
	}

	public function tab(){
		return $this->guild()->merge($this->belongsTo(GuildBankTab::class, 'TabId', 'TabId'));
	}

	public function item(){
		return $this->belongsTo(ItemInstance::class, 'item_guid', 'guid');
	}
}
