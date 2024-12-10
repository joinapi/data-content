<?php

namespace Joinbiz\Data\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $user_login_id
 * @property string $party_id
 * @property string $visit_id
 * @property string $web_preference_type_id
 * @property string $web_preference_value
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Party $party
 * @property WebPreferenceType $webPreferenceType
 * @property UserLogin $userLogin
 */
class WebUserPreference extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'web_user_preference';

    /**
     * @var array
     */
    protected $fillable = ['web_preference_value', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function webPreferenceType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\WebPreferenceType', 'web_preference_type_id', 'web_preference_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Content\UserLogin', 'user_login_id', 'user_login_id');
    }
}
