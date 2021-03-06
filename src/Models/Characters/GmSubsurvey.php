<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 21 Dec 2016 15:02:13 +0000.
 */

namespace Reactmay\WoWModels\Characters;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GmSubsurvey
 * 
 * @property int $surveyId
 * @property int $questionId
 * @property int $answer
 * @property string $answerComment
 *
 * @package Reactmay\WoWModels\Characters
 */
class GmSubsurvey extends Eloquent
{
	protected $connection = 'characters';
	protected $table = 'gm_subsurvey';
	public $timestamps = false;

	protected $casts = [
		'questionId' => 'int',
		'answer' => 'int'
	];

	protected $fillable = [
		'answer',
		'answerComment'
	];
}
