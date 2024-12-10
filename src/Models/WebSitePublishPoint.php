<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $content_id
 * @property string $template_title
 * @property string $style_sheet_file
 * @property string $logo
 * @property string $medallion_logo
 * @property string $line_logo
 * @property string $left_bar_id
 * @property string $right_bar_id
 * @property string $content_dept
 * @property string $about_content_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Content $content
 */
class WebSitePublishPoint extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'web_site_publish_point';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'content_id';

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
    protected $fillable = ['template_title', 'style_sheet_file', 'logo', 'medallion_logo', 'line_logo', 'left_bar_id', 'right_bar_id', 'content_dept', 'about_content_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function content()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\Content', 'content_id', 'content_id');
    }
}
