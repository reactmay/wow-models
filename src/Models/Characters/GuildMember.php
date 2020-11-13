<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildMember
 * 
 * @property int $guildid
 * @property int $guid
 * @property int $rank
 * @property string $pnote
 * @property string $offnote
 *
 * @package reactmay\WoWModels\Characters
 */
class GuildMember extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'guild_member';
	protected $primaryKey = 'guid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guildid' => 'int',
		'guid' => 'int',
		'rank' => 'int'
	];

	protected $fillable = [
		'guildid',
		'rank',
		'pnote',
		'offnote'
	];
}
