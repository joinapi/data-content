<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $content_purpose_type_id
 * @property string $content_operation_id
 * @property string $role_type_id
 * @property string $status_id
 * @property string $privilege_enum_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ContentOperation $contentOperation
 * @property Enumeration $enumerationByPrivilegeEnumId
 * @property RoleType $roleType
 * @property StatusItem $statusItem
 * @property ContentPurposeType $contentPurposeType
 */
class ContentPurposeOperation extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'content_purpose_operation';

    /**
     * @var array
     */
    protected $fillable = ['last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contentOperation()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\ContentOperation', 'content_operation_id', 'content_operation_id');
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
    public function roleType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\RoleType', 'role_type_id', 'role_type_id');
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
    public function contentPurposeType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\ContentPurposeType', 'content_purpose_type_id', 'content_purpose_type_id');
    }
}
