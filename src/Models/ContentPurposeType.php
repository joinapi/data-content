<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $content_purpose_type_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property DataResourcePurpose[] $dataResourcePurposes
 * @property ContentPurposeOperation[] $contentPurposeOperations
 * @property ContentPurpose[] $contentPurposes
 */
class ContentPurposeType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'content_purpose_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'content_purpose_type_id';

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
    protected $fillable = ['description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dataResourcePurposes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\DataResourcePurpose', 'content_purpose_type_id', 'content_purpose_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentPurposeOperations()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentPurposeOperation', 'content_purpose_type_id', 'content_purpose_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentPurposes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\ContentPurpose', 'content_purpose_type_id', 'content_purpose_type_id');
    }
}
