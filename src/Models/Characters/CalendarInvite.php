<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CalendarInvite
 * 
 * @property int $id
 * @property int $event
 * @property int $invitee
 * @property int $sender
 * @property bool $status
 * @property int $statustime
 * @property bool $rank
 * @property string $text
 *
 * @package reactmay\WoWModels\Characters
 */
class CalendarInvite extends Eloquent
{
	protected $connection = 'characters';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'event' => 'int',
		'invitee' => 'int',
		'sender' => 'int',
		'status' => 'bool',
		'statustime' => 'int',
		'rank' => 'bool'
	];

	protected $fillable = [
		'event',
		'invitee',
		'sender',
		'status',
		'statustime',
		'rank',
		'text'
	];

	public function invitee(){
		return $this->belongsTo(Character::class, 'invitee', 'guid');
	}

	public function sender(){
		return $this->hasOne(Character::class, 'sender', 'guid');
	}
}
