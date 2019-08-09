<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:05:44 +0000.
 */

namespace reactmay\WoWModels\Auth;

use Illuminate\Database\Eloquent\Model as Eloquent;
use reactmay\WoWModels\Characters\Character;
use reactmay\WoWModels\Characters\CharacterStats;

/**
 * Class Account
 * 
 * @property int $id
 * @property string $username
 * @property string $pass_hash
 * @property string $sessionkey
 * @property string $v
 * @property string $s
 * @property string $token_key
 * @property string $email
 * @property string $reg_mail
 * @property \Carbon\Carbon $joindate
 * @property string $last_ip
 * @property string $last_attempt_ip
 * @property int $failed_logins
 * @property int $locked
 * @property string $lock_country
 * @property \Carbon\Carbon $last_login
 * @property int $online
 * @property int $expansion_id
 * @property int $mutetime
 * @property string $mutereason
 * @property string $muteby
 * @property int $locale
 * @property string $os
 * @property int $recruiter
 * @property string $password
 * @property string $remember_token
 * 
 * @property \Illuminate\Database\Eloquent\Collection $rbac_account_permissions
 *
 * @package reactmay\WoWModels\Auth
 */
class Account extends Eloquent
{
	protected $connection = 'auth';
	protected $table = 'account';
	public $timestamps = false;

	protected $casts = [
		'failed_logins' => 'int',
		'locked' => 'int',
		'online' => 'int',
		'expansion_id' => 'int',
		'mutetime' => 'int',
		'locale' => 'int',
		'recruiter' => 'int'
	];

	protected $dates = [
		'joindate',
		'last_login'
	];

	protected $hidden = [
	    'pass_hash',
        'sessionkey',
        'v',
        's',
	];

    protected $guarded = [
        'sessionkey',
        'v',
        's',
    ];

	protected $fillable = [
		'username',
		'pass_hash',
		'token_key',
		'email',
		'reg_mail',
		'joindate',
		'last_ip',
		'last_attempt_ip',
		'failed_logins',
		'locked',
		'lock_country',
		'last_login',
		'online',
		'expansion_id',
		'mutetime',
		'mutereason',
		'muteby',
		'locale',
		'os',
		'recruiter'
	];

	public function rbac_account_permissions()
	{
		return $this->hasMany(\reactmay\WoWModels\Auth\RbacAccountPermission::class, 'accountId');
	}

	public function accesses(){
       return  $this->hasMany(AccountAccess::class,'id');
    }

    public function characters(){
        return $this->hasMany(Character::class, 'account');
    }

    public function bans(){
        return $this->hasMany(AccountBanned::class, 'id');
    }

    public function mutes(){
        return $this->hasMany(AccountMuted::class, 'guid');
    }

    public function balance(){
        return $this->hasOne(AccountBalance::class, 'account_id');
    }

    public function character_stats(){
        return $this->hasMany(CharacterStats::class, 'account');
    }
}
