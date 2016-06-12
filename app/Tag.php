<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag.
 */
class Tag extends Model
{
    private $types = [
        'course',
        'specialization'
    ];

    /**
     * Get materials associated with the given tag
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function materials()
    {
        return $this->belongsToMany('App\Material', "material_tag");
    }
}