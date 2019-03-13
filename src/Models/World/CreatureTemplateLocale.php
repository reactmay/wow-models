<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:07:57 +0000.
 */

namespace reactmay\WoWModels\Characters;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class CreatureTemplateLocale
 * 
 * @property int $entry
 * @property string $locale
 * @property string $Name
 * @property string $Title
 * @property int $VerifiedBuild
 *
 * @package reactmay\WoWModels\Characters
 */
class CreatureTemplateLocale extends Eloquent
{
	protected $connection = 'world';
	protected $table = 'creature_template_locale';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'entry' => 'int',
		'VerifiedBuild' => 'int'
	];

	protected $fillable = [
		'Name',
		'Title',
		'VerifiedBuild'
	];
}
