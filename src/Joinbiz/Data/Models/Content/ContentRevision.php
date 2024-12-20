<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $content_id
 * @property string $content_revision_seq_id
 * @property string $committed_by_party_id
 * @property string $comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Party $partyByCommittedByPartyId
 * @property Content $content
 */
class ContentRevision extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'content_revision';

    /**
     * @var array
     */
    protected $fillable = ['committed_by_party_id', 'comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByCommittedByPartyId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'committed_by_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function content()
    {
        return $this->belongsTo('\Content', 'content_id', 'content_id');
    }
}
