<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $survey_id
 * @property string $survey_question_id
 * @property string $from_date
 * @property string $with_survey_question_id
 * @property string $with_survey_option_seq_id
 * @property string $thru_date
 * @property string $survey_page_seq_id
 * @property string $survey_multi_resp_id
 * @property string $survey_multi_resp_col_id
 * @property string $required_field
 * @property float $sequence_num
 * @property string $external_field_ref
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Survey $survey
 * @property SurveyQuestion $surveyQuestion
 */
class SurveyQuestionAppl extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'survey_question_appl';

    /**
     * @var array
     */
    protected $fillable = ['with_survey_question_id', 'with_survey_option_seq_id', 'thru_date', 'survey_page_seq_id', 'survey_multi_resp_id', 'survey_multi_resp_col_id', 'required_field', 'sequence_num', 'external_field_ref', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function survey()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\Survey', 'survey_id', 'survey_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function surveyQuestion()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\SurveyQuestion', 'survey_question_id', 'survey_question_id');
    }
}
