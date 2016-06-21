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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggables')->withTimestamps();
    }

    /**
     * Attach tag to material
     * @param Tag $tag Tag to attach to model
     * @return bool false, if this tag is already attached, true otherwise
     */
    public function addTag(Tag $tag)
    {
        if (!$this->tags()->find($tag->id)) {
            $this->tags()->attach($tag->id);
            return true;
        } else {
            return false;
        }
    }
}
