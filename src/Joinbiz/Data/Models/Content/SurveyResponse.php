<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $survey_response_id
 * @property string $survey_id
 * @property string $status_id
 * @property string $party_id
 * @property string $response_date
 * @property string $last_modified_date
 * @property string $reference_id
 * @property string $general_feedback
 * @property string $order_id
 * @property string $order_item_seq_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property DataResource[] $dataResources
 * @property GiftCardFulfillment[] $giftCardFulfillments
 * @property Survey $survey
 * @property StatusItem $statusItem
 * @property ShoppingListItemSurvey[] $shoppingListItemSurveys
 * @property SurveyResponseAnswer[] $surveyResponseAnswers
 */
class SurveyResponse extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'survey_response';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'survey_response_id';

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
    protected $fillable = ['survey_id', 'status_id', 'party_id', 'response_date', 'last_modified_date', 'reference_id', 'general_feedback', 'order_id', 'order_item_seq_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dataResources()
    {
        return $this->hasMany('\DataResource', 'survey_response_id', 'survey_response_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function giftCardFulfillments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\GiftCardFulfillment', 'survey_response_id', 'survey_response_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function survey()
    {
        return $this->belongsTo('\Survey', 'survey_id', 'survey_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shoppingListItemSurveys()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ShoppingListItemSurvey', 'survey_response_id', 'survey_response_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveyResponseAnswers()
    {
        return $this->hasMany('\SurveyResponseAnswer', 'survey_response_id', 'survey_response_id');
    }
}
