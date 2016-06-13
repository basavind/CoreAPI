<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag.
 */
class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * Get materials associated with the given tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function materials()
    {
        return $this->morphedByMany(Material::class, 'taggable');
    }
}
