<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Material.
 */
class Material extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'link',
        'additional',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function slices()
    {
        return $this->hasMany(Slice::class);
    }
}
