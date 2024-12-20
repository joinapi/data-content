<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $meta_data_predicate_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property DataResourceMetaData[] $dataResourceMetaDatas
 * @property ContentMetaData[] $contentMetaDatas
 */
class MetaDataPredicate extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'meta_data_predicate';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'meta_data_predicate_id';

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
    public function dataResourceMetaDatas()
    {
        return $this->hasMany('\DataResourceMetaData', 'meta_data_predicate_id', 'meta_data_predicate_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentMetaDatas()
    {
        return $this->hasMany('\ContentMetaData', 'meta_data_predicate_id', 'meta_data_predicate_id');
    }
}
