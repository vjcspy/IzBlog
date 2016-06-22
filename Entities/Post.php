<?php namespace Modules\IzBlog\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $table = 'izblog_post';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Polymorphic relationship
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function images() {
        return $this->morphMany('\Modules\IzCore\Entities\Image', 'imageable');
    }
}