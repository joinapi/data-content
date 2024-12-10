<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $web_site_content_type_id
 * @property string $parent_type_id
 * @property string $description
 * @property string $has_table
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property WebSiteContent[] $webSiteContents
 * @property WebSiteContentType $webSiteContentTypeByParentTypeId
 */
class WebSiteContentType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'web_site_content_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'web_site_content_type_id';

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
    protected $fillable = ['parent_type_id', 'description', 'has_table', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function webSiteContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\WebSiteContent', 'web_site_content_type_id', 'web_site_content_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function webSiteContentTypeByParentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\WebSiteContentType', 'parent_type_id', 'web_site_content_type_id');
    }
}
