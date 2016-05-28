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
}
