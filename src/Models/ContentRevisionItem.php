<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $content_id
 * @property string $content_revision_seq_id
 * @property string $item_content_id
 * @property string $old_data_resource_id
 * @property string $new_data_resource_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property DataResource $dataResourceByNewDataResourceId
 * @property DataResource $dataResourceByOldDataResourceId
 */
class ContentRevisionItem extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'content_revision_item';

    /**
     * @var array
     */
    protected $fillable = ['old_data_resource_id', 'new_data_resource_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataResourceByNewDataResourceId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\DataResource', 'new_data_resource_id', 'data_resource_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataResourceByOldDataResourceId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\DataResource', 'old_data_resource_id', 'data_resource_id');
    }
}
