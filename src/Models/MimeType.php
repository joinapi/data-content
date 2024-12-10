<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $mime_type_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CommunicationEvent[] $communicationEventsByContentMimeTypeId
 * @property FileExtension[] $fileExtensions
 * @property MimeTypeHtmlTemplate $mimeTypeHtmlTemplate
 */
class MimeType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mime_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'mime_type_id';

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
    public function communicationEventsByContentMimeTypeId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\CommunicationEvent', 'content_mime_type_id', 'mime_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fileExtensions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\FileExtension', 'mime_type_id', 'mime_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mimeTypeHtmlTemplate()
    {
        return $this->hasOne('Joinbiz\Data\Models\Content\MimeTypeHtmlTemplate', 'mime_type_id', 'mime_type_id');
    }
}
