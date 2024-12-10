<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $content_approval_id
 * @property string $content_id
 * @property string $party_id
 * @property string $role_type_id
 * @property string $approval_status_id
 * @property string $content_revision_seq_id
 * @property string $approval_date
 * @property float $sequence_num
 * @property string $comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property StatusItem $statusItemByApprovalStatusId
 * @property Content $content
 * @property Party $party
 * @property RoleType $roleType
 */
class ContentApproval extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'content_approval';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'content_approval_id';

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
    protected $fillable = ['content_id', 'party_id', 'role_type_id', 'approval_status_id', 'content_revision_seq_id', 'approval_date', 'sequence_num', 'comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItemByApprovalStatusId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\StatusItem', 'approval_status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function content()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\Content', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\Party', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roleType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\RoleType', 'role_type_id', 'role_type_id');
    }
}
