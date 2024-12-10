<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $document_id
 * @property string $document_type_id
 * @property string $date_created
 * @property string $comments
 * @property string $document_location
 * @property string $document_text
 * @property string $image_data
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property DocumentAttribute[] $documentAttributes
 * @property DocumentType $documentType
 * @property ShippingDocument $shippingDocument
 */
class Document extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'document';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'document_id';

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
    protected $fillable = ['document_type_id', 'date_created', 'comments', 'document_location', 'document_text', 'image_data', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Content\DocumentAttribute', 'document_id', 'document_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function documentType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\DocumentType', 'document_type_id', 'document_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function shippingDocument()
    {
        return $this->hasOne('Joinbiz\Data\Models\Content\ShippingDocument', 'document_id', 'document_id');
    }
}
