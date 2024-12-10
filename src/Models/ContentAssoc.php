<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $content_id
 * @property string $content_id_to
 * @property string $content_assoc_type_id
 * @property string $from_date
 * @property string $content_assoc_predicate_id
 * @property string $data_source_id
 * @property string $created_by_user_login
 * @property string $last_modified_by_user_login
 * @property string $thru_date
 * @property float $sequence_num
 * @property string $map_key
 * @property float $upper_coordinate
 * @property float $left_coordinate
 * @property string $created_date
 * @property string $last_modified_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property UserLogin $userLoginByCreatedByUserLogin
 * @property DataSource $dataSource
 * @property Content $content
 * @property UserLogin $userLoginByLastModifiedByUserLogin
 * @property ContentAssocPredicate $contentAssocPredicate
 * @property Content $contentByContentIdTo
 * @property ContentAssocType $contentAssocType
 */
class ContentAssoc extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'content_assoc';

    /**
     * @var array
     */
    protected $fillable = ['content_assoc_predicate_id', 'data_source_id', 'created_by_user_login', 'last_modified_by_user_login', 'thru_date', 'sequence_num', 'map_key', 'upper_coordinate', 'left_coordinate', 'created_date', 'last_modified_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByCreatedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\UserLogin', 'created_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataSource()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\DataSource', 'data_source_id', 'data_source_id');
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
    public function userLoginByLastModifiedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\UserLogin', 'last_modified_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contentAssocPredicate()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\ContentAssocPredicate', 'content_assoc_predicate_id', 'content_assoc_predicate_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contentByContentIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\Content', 'content_id_to', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contentAssocType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\ContentAssocType', 'content_assoc_type_id', 'content_assoc_type_id');
    }
}
