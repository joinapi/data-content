<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $content_search_result_id
 * @property string $constraint_seq_id
 * @property string $constraint_name
 * @property string $info_string
 * @property string $include_sub_categories
 * @property string $is_and
 * @property string $any_prefix
 * @property string $any_suffix
 * @property string $remove_stems
 * @property string $low_value
 * @property string $high_value
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ContentSearchResult $contentSearchResult
 */
class ContentSearchConstraint extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'content_search_constraint';

    /**
     * @var array
     */
    protected $fillable = ['constraint_name', 'info_string', 'include_sub_categories', 'is_and', 'any_prefix', 'any_suffix', 'remove_stems', 'low_value', 'high_value', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contentSearchResult()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\ContentSearchResult', 'content_search_result_id', 'content_search_result_id');
    }
}
