<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $survey_question_id
 * @property string $survey_option_seq_id
 * @property string $description
 * @property float $sequence_num
 * @property float $amount_base
 * @property string $amount_base_uom_id
 * @property float $weight_factor
 * @property float $duration
 * @property string $duration_uom_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property SurveyQuestion $surveyQuestion
 */
class SurveyQuestionOption extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'survey_question_option';

    /**
     * @var array
     */
    protected $fillable = ['description', 'sequence_num', 'amount_base', 'amount_base_uom_id', 'weight_factor', 'duration', 'duration_uom_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function surveyQuestion()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\SurveyQuestion', 'survey_question_id', 'survey_question_id');
    }
}
