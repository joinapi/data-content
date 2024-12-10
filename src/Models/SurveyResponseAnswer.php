<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $survey_response_id
 * @property string $survey_question_id
 * @property string $survey_multi_resp_col_id
 * @property string $survey_option_seq_id
 * @property string $content_id
 * @property string $survey_multi_resp_id
 * @property string $boolean_response
 * @property float $currency_response
 * @property float $float_response
 * @property float $numeric_response
 * @property string $text_response
 * @property string $answered_date
 * @property float $amount_base
 * @property string $amount_base_uom_id
 * @property float $weight_factor
 * @property float $duration
 * @property string $duration_uom_id
 * @property float $sequence_num
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Content $content
 * @property SurveyQuestion $surveyQuestion
 * @property SurveyResponse $surveyResponse
 */
class SurveyResponseAnswer extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'survey_response_answer';

    /**
     * @var array
     */
    protected $fillable = ['survey_option_seq_id', 'content_id', 'survey_multi_resp_id', 'boolean_response', 'currency_response', 'float_response', 'numeric_response', 'text_response', 'answered_date', 'amount_base', 'amount_base_uom_id', 'weight_factor', 'duration', 'duration_uom_id', 'sequence_num', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function content()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\Content', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function surveyQuestion()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\SurveyQuestion', 'survey_question_id', 'survey_question_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function surveyResponse()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\SurveyResponse', 'survey_response_id', 'survey_response_id');
    }
}
