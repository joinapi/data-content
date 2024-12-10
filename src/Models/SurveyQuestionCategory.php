<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $survey_question_category_id
 * @property string $parent_category_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property SurveyQuestion[] $surveyQuestions
 * @property SurveyQuestionCategory $surveyQuestionCategoryByParentCategoryId
 */
class SurveyQuestionCategory extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'survey_question_category';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'survey_question_category_id';

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
    protected $fillable = ['parent_category_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveyQuestions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\SurveyQuestion', 'survey_question_category_id', 'survey_question_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function surveyQuestionCategoryByParentCategoryId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\SurveyQuestionCategory', 'parent_category_id', 'survey_question_category_id');
    }
}
