<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GmSurvey
 * 
 * @property int $surveyId
 * @property int $guid
 * @property int $mainSurvey
 * @property string $comment
 * @property int $createTime
 *
 * @package reactmay\WoWModels\Characters
 */
class GmSurvey extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'gm_survey';
	protected $primaryKey = 'surveyId';
	public $timestamps = false;

	protected $casts = [
		'guid' => 'int',
		'mainSurvey' => 'int',
		'createTime' => 'int'
	];

	protected $fillable = [
		'guid',
		'mainSurvey',
		'comment',
		'createTime'
	];
}
