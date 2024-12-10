<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $data_resource_id
 * @property string $meta_data_predicate_id
 * @property string $data_source_id
 * @property string $meta_data_value
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property DataResource $dataResource
 * @property MetaDataPredicate $metaDataPredicate
 * @property DataSource $dataSource
 */
class DataResourceMetaData extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'data_resource_meta_data';

    /**
     * @var array
     */
    protected $fillable = ['data_source_id', 'meta_data_value', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function metaDataPredicate()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\MetaDataPredicate', 'meta_data_predicate_id', 'meta_data_predicate_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataSource()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\DataSource', 'data_source_id', 'data_source_id');
    }
}
