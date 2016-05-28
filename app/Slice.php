<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Slices.
 */
class Slice extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'material_id',
        'content',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
