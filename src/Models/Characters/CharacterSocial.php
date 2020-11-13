<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CharacterSocial
 * 
 * @property int $guid
 * @property int $friend
 * @property int $flags
 * @property string $note
 *
 * @package Reactmay\WoWModels\Characters
 */
class CharacterSocial extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'character_social';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'friend' => 'int',
		'flags' => 'int'
	];

	protected $fillable = [
		'note'
	];

	public function character(){
		return $this->belongsTo(Character::class, 'guid', 'guid');
	}

	public function friend(){
		return $this->belongsTo(Character::class, 'friend', 'guid');
	}
}
