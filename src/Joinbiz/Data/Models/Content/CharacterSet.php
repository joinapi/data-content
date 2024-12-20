<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $character_set_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property DataResource[] $dataResources
 * @property Content[] $contents
 */
class CharacterSet extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'character_set';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'character_set_id';

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
    public function dataResources()
    {
        return $this->hasMany('\DataResource', 'character_set_id', 'character_set_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contents()
    {
        return $this->hasMany('\Content', 'character_set_id', 'character_set_id');
    }
}
