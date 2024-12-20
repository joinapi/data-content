<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $survey_id
 * @property string $survey_name
 * @property string $description
 * @property string $comments
 * @property string $submit_caption
 * @property string $response_service
 * @property string $is_anonymous
 * @property string $allow_multiple
 * @property string $allow_update
 * @property string $acro_form_content_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property DataResource[] $dataResources
 * @property ProductStoreFinActSetting[] $productStoreFinActSettingsByPurchaseSurveyId
 * @property SurveyResponse[] $surveyResponses
 * @property ProductStoreSurveyAppl[] $productStoreSurveyAppls
 * @property WorkEffortSurveyAppl[] $workEffortSurveyAppls
 * @property SurveyTrigger[] $surveyTriggers
 * @property SurveyPage[] $surveyPages
 * @property SurveyMultiResp[] $surveyMultiResps
 * @property SurveyQuestionAppl[] $surveyQuestionAppls
 */
class Survey extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'survey';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'survey_id';

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
    protected $fillable = ['survey_name', 'description', 'comments', 'submit_caption', 'response_service', 'is_anonymous', 'allow_multiple', 'allow_update', 'acro_form_content_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dataResources()
    {
        return $this->hasMany('\DataResource', 'survey_id', 'survey_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreFinActSettingsByPurchaseSurveyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreFinActSetting', 'purchase_survey_id', 'survey_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveyResponses()
    {
        return $this->hasMany('\SurveyResponse', 'survey_id', 'survey_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreSurveyAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreSurveyAppl', 'survey_id', 'survey_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortSurveyAppls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortSurveyAppl', 'survey_id', 'survey_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveyTriggers()
    {
        return $this->hasMany('\SurveyTrigger', 'survey_id', 'survey_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveyPages()
    {
        return $this->hasMany('\SurveyPage', 'survey_id', 'survey_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveyMultiResps()
    {
        return $this->hasMany('\SurveyMultiResp', 'survey_id', 'survey_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveyQuestionAppls()
    {
        return $this->hasMany('\SurveyQuestionAppl', 'survey_id', 'survey_id');
    }
}
