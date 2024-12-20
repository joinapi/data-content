<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $data_resource_id
 * @property string $content_purpose_type_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property DataResource $dataResource
 * @property ContentPurposeType $contentPurposeType
 */
class DataResourcePurpose extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'data_resource_purpose';

    /**
     * @var array
     */
    protected $fillable = ['last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataResource()
    {
        return $this->belongsTo('\DataResource', 'data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contentPurposeType()
    {
        return $this->belongsTo('\ContentPurposeType', 'content_purpose_type_id', 'content_purpose_type_id');
    }
}
