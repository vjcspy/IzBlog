<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 23/06/2016
 * Time: 10:28
 */

namespace Modules\IzBlog\Entities\Theme;


class View extends \Illuminate\Database\Eloquent\Model {

    protected $table = 'izblog_view';

    protected $fillable = ['name', 'share_layout', 'has_config'];

    /**
     * Relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function themes() {
        return $this->belongsTo('\Modules\IzCore\Entities\Theme', 'theme_name', 'name');
    }
}