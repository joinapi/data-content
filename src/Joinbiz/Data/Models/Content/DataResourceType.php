<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $data_resource_type_id
 * @property string $parent_type_id
 * @property string $has_table
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property DataResource[] $dataResources
 * @property DataResourceType $dataResourceTypeByParentTypeId
 * @property DataResourceTypeAttr[] $dataResourceTypeAttrs
 */
class DataResourceType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'data_resource_type';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'data_resource_type_id';

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
    protected $fillable = ['parent_type_id', 'has_table', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dataResources()
    {
        return $this->hasMany('\DataResource', 'data_resource_type_id', 'data_resource_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataResourceTypeByParentTypeId()
    {
        return $this->belongsTo('\DataResourceType', 'parent_type_id', 'data_resource_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dataResourceTypeAttrs()
    {
        return $this->hasMany('\DataResourceTypeAttr', 'data_resource_type_id', 'data_resource_type_id');
    }
}
