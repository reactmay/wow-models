<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildBankTab
 * 
 * @property int $guildid
 * @property int $TabId
 * @property string $TabName
 * @property string $TabIcon
 * @property string $TabText
 *
 * @package reactmay\WoWModels\Characters
 */
class GuildBankTab extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'guild_bank_tab';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guildid' => 'int',
		'TabId' => 'int'
	];

	protected $fillable = [
		'TabName',
		'TabIcon',
		'TabText'
	];

	public function guild(){
		return $this->belongsTo(Guild::class, 'guildid', 'guildid');
	}
}
