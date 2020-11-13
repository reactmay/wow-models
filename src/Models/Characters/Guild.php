<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Guild
 * 
 * @property int $guildid
 * @property string $name
 * @property int $leaderguid
 * @property int $EmblemStyle
 * @property int $EmblemColor
 * @property int $BorderStyle
 * @property int $BorderColor
 * @property int $BackgroundColor
 * @property string $info
 * @property string $motd
 * @property int $createdate
 * @property int $BankMoney
 *
 * @package reactmay\WoWModels\Characters
 */
class Guild extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'guild';
	protected $primaryKey = 'guildid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guildid' => 'int',
		'leaderguid' => 'int',
		'EmblemStyle' => 'int',
		'EmblemColor' => 'int',
		'BorderStyle' => 'int',
		'BorderColor' => 'int',
		'BackgroundColor' => 'int',
		'createdate' => 'int',
		'BankMoney' => 'int'
	];

	protected $fillable = [
		'name',
		'leaderguid',
		'EmblemStyle',
		'EmblemColor',
		'BorderStyle',
		'BorderColor',
		'BackgroundColor',
		'info',
		'motd',
		'createdate',
		'BankMoney'
	];

	public function leader(){
		return $this->belongsTo(Character::class, 'leaderguid', 'guid');
	}
}
