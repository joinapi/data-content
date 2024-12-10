<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $data_resource_id
 * @property string $data_resource_type_id
 * @property string $data_template_type_id
 * @property string $data_category_id
 * @property string $data_source_id
 * @property string $status_id
 * @property string $character_set_id
 * @property string $survey_id
 * @property string $survey_response_id
 * @property string $created_by_user_login
 * @property string $last_modified_by_user_login
 * @property string $data_resource_name
 * @property string $locale_string
 * @property string $mime_type_id
 * @property string $object_info
 * @property string $related_detail_id
 * @property string $is_public
 * @property string $created_date
 * @property string $last_modified_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ElectronicText $electronicText
 * @property DataResourcePurpose[] $dataResourcePurposes
 * @property DataResourceAttribute[] $dataResourceAttributes
 * @property DataResourceMetaData[] $dataResourceMetaDatas
 * @property ProductFeatureDataResource[] $productFeatureDataResources
 * @property DataResourceRole[] $dataResourceRoles
 * @property ImageDataResource $imageDataResource
 * @property AudioDataResource $audioDataResource
 * @property ContentRevisionItem[] $contentRevisionItemsByNewDataResourceId
 * @property ContentRevisionItem[] $contentRevisionItemsByOldDataResourceId
 * @property Content[] $contents
 * @property Content[] $contentsByTemplateDataResourceId
 * @property UserLogin $userLoginByCreatedByUserLogin
 * @property CharacterSet $characterSet
 * @property DataSource $dataSource
 * @property UserLogin $userLoginByLastModifiedByUserLogin
 * @property Survey $survey
 * @property SurveyResponse $surveyResponse
 * @property DataCategory $dataCategory
 * @property DataTemplateType $dataTemplateType
 * @property DataResourceType $dataResourceType
 * @property StatusItem $statusItem
 * @property OtherDataResource $otherDataResource
 * @property VideoDataResource $videoDataResource
 */
class DataResource extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'data_resource';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'data_resource_id';

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
    protected $fillable = ['data_resource_type_id', 'data_template_type_id', 'data_category_id', 'data_source_id', 'status_id', 'character_set_id', 'survey_id', 'survey_response_id', 'created_by_user_login', 'last_modified_by_user_login', 'data_resource_name', 'locale_string', 'mime_type_id', 'object_info', 'related_detail_id', 'is_public', 'created_date', 'last_modified_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function electronicText()
    {
        return $this->hasOne('Joinbiz\Data\Models\Content\ElectronicText', 'data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dataResourcePurposes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\DataResourcePurpose', 'data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dataResourceAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\DataResourceAttribute', 'data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dataResourceMetaDatas()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\DataResourceMetaData', 'data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productFeatureDataResources()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ProductFeatureDataResource', 'data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dataResourceRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\DataResourceRole', 'data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function imageDataResource()
    {
        return $this->hasOne('Joinbiz\Data\Models\Content\ImageDataResource', 'data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function audioDataResource()
    {
        return $this->hasOne('Joinbiz\Data\Models\Content\AudioDataResource', 'data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentRevisionItemsByNewDataResourceId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentRevisionItem', 'new_data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentRevisionItemsByOldDataResourceId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentRevisionItem', 'old_data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\Content', 'data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentsByTemplateDataResourceId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\Content', 'template_data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByCreatedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\UserLogin', 'created_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function characterSet()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\CharacterSet', 'character_set_id', 'character_set_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataSource()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\DataSource', 'data_source_id', 'data_source_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByLastModifiedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\UserLogin', 'last_modified_by_user_login', 'user_login_id');
    }

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
    public function surveyResponse()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\SurveyResponse', 'survey_response_id', 'survey_response_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataCategory()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\DataCategory', 'data_category_id', 'data_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataTemplateType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\DataTemplateType', 'data_template_type_id', 'data_template_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataResourceType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\DataResourceType', 'data_resource_type_id', 'data_resource_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function otherDataResource()
    {
        return $this->hasOne('Joinbiz\Data\Models\Content\OtherDataResource', 'data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function videoDataResource()
    {
        return $this->hasOne('Joinbiz\Data\Models\Content\VideoDataResource', 'data_resource_id', 'data_resource_id');
    }
}
