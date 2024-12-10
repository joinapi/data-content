<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $content_id
 * @property string $content_type_id
 * @property string $owner_content_id
 * @property string $decorator_content_id
 * @property string $instance_of_content_id
 * @property string $data_resource_id
 * @property string $template_data_resource_id
 * @property string $data_source_id
 * @property string $status_id
 * @property string $privilege_enum_id
 * @property string $custom_method_id
 * @property string $character_set_id
 * @property string $created_by_user_login
 * @property string $last_modified_by_user_login
 * @property string $service_name
 * @property string $content_name
 * @property string $description
 * @property string $locale_string
 * @property string $mime_type_id
 * @property float $child_leaf_count
 * @property float $child_branch_count
 * @property string $created_date
 * @property string $last_modified_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ContentMetaData[] $contentMetaDatas
 * @property ProductPromoContent[] $productPromoContents
 * @property PaymentContent[] $paymentContents
 * @property ContentKeyword[] $contentKeywords
 * @property PortalPage[] $portalPagesByHelpContentId
 * @property ContentAttribute[] $contentAttributes
 * @property ProdConfItemContent[] $prodConfItemContents
 * @property ProductCategoryContent[] $productCategoryContents
 * @property ProductContent[] $productContents
 * @property FacilityContent[] $facilityContents
 * @property ContentRole[] $contentRoles
 * @property ContentAssoc[] $contentAssocs
 * @property ContentAssoc[] $contentAssocsByContentIdTo
 * @property ContentApproval[] $contentApprovals
 * @property InvoiceContent[] $invoiceContents
 * @property ContentRevision[] $contentRevisions
 * @property AgreementContent[] $agreementContents
 * @property UserLogin $userLoginByCreatedByUserLogin
 * @property CharacterSet $characterSet
 * @property CustomMethod $customMethod
 * @property Content $contentByDecoratorContentId
 * @property DataSource $dataSource
 * @property Content $contentByInstanceOfContentId
 * @property UserLogin $userLoginByLastModifiedByUserLogin
 * @property Content $contentByOwnerContentId
 * @property Enumeration $enumerationByPrivilegeEnumId
 * @property StatusItem $statusItem
 * @property DataResource $dataResource
 * @property DataResource $dataResourceByTemplateDataResourceId
 * @property ContentType $contentType
 * @property OrderContent[] $orderContents
 * @property CustRequestContent[] $custRequestContents
 * @property SubscriptionResource[] $subscriptionResources
 * @property PartyContent[] $partyContents
 * @property CommEventContentAssoc[] $commEventContentAssocs
 * @property ContentPurpose[] $contentPurposes
 * @property SurveyResponseAnswer[] $surveyResponseAnswers
 * @property WorkEffortContent[] $workEffortContents
 * @property WebSitePublishPoint $webSitePublishPoint
 * @property WebSitePathAlias[] $webSitePathAliases
 * @property WebSiteContent[] $webSiteContents
 * @property WebPage[] $webPages
 */
class Content extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'content';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'content_id';

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
    protected $fillable = ['content_type_id', 'owner_content_id', 'decorator_content_id', 'instance_of_content_id', 'data_resource_id', 'template_data_resource_id', 'data_source_id', 'status_id', 'privilege_enum_id', 'custom_method_id', 'character_set_id', 'created_by_user_login', 'last_modified_by_user_login', 'service_name', 'content_name', 'description', 'locale_string', 'mime_type_id', 'child_leaf_count', 'child_branch_count', 'created_date', 'last_modified_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentMetaDatas()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentMetaData', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ProductPromoContent', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\PaymentContent', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentKeywords()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentKeyword', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function portalPagesByHelpContentId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\PortalPage', 'help_content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentAttribute', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prodConfItemContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ProdConfItemContent', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCategoryContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ProductCategoryContent', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ProductContent', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\FacilityContent', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentRole', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentAssocs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentAssoc', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentAssocsByContentIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentAssoc', 'content_id_to', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentApprovals()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentApproval', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\InvoiceContent', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentRevisions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentRevision', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\AgreementContent', 'content_id', 'content_id');
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
    public function customMethod()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\CustomMethod', 'custom_method_id', 'custom_method_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contentByDecoratorContentId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\Content', 'decorator_content_id', 'content_id');
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
    public function contentByInstanceOfContentId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\Content', 'instance_of_content_id', 'content_id');
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
    public function contentByOwnerContentId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\Content', 'owner_content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByPrivilegeEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\Enumeration', 'privilege_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataResource()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\DataResource', 'data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataResourceByTemplateDataResourceId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\DataResource', 'template_data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contentType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\ContentType', 'content_type_id', 'content_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\OrderContent', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\CustRequestContent', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionResources()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\SubscriptionResource', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\PartyContent', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commEventContentAssocs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\CommEventContentAssoc', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentPurposes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentPurpose', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveyResponseAnswers()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\SurveyResponseAnswer', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\WorkEffortContent', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function webSitePublishPoint()
    {
        return $this->hasOne('Joinbiz\Data\Models\Content\WebSitePublishPoint', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function webSitePathAliases()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\WebSitePathAlias', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function webSiteContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\WebSiteContent', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function webPages()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\WebPage', 'content_id', 'content_id');
    }
}
