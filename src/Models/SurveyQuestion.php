<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $survey_question_id
 * @property string $survey_question_category_id
 * @property string $survey_question_type_id
 * @property string $geo_id
 * @property string $description
 * @property string $question
 * @property string $hint
 * @property string $enum_type_id
 * @property string $format_string
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Geo $geo
 * @property SurveyQuestionCategory $surveyQuestionCategory
 * @property SurveyQuestionType $surveyQuestionType
 * @property SurveyQuestionOption[] $surveyQuestionOptions
 * @property SurveyQuestionAppl[] $surveyQuestionAppls
 * @property SurveyResponseAnswer[] $surveyResponseAnswers
 */
class SurveyQuestion extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'survey_question';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'survey_question_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['survey_question_category_id', 'survey_question_type_id', 'geo_id', 'description', 'question', 'hint', 'enum_type_id', 'format_string', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\Geo', 'geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function surveyQuestionCategory()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\SurveyQuestionCategory', 'survey_question_category_id', 'survey_question_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function surveyQuestionType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\SurveyQuestionType', 'survey_question_type_id', 'survey_question_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveyQuestionOptions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\SurveyQuestionOption', 'survey_question_id', 'survey_question_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveyQuestionAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\SurveyQuestionAppl', 'survey_question_id', 'survey_question_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveyResponseAnswers()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\SurveyResponseAnswer', 'survey_question_id', 'survey_question_id');
    }
}
