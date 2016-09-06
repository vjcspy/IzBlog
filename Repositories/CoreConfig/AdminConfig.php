<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 6/23/16
 * Time: 11:23 PM
 */

namespace Modules\IzBlog\Repositories\CoreConfig;


use Modules\IzCore\Repositories\CoreConfig\ConfigInterface;

class AdminConfig implements ConfigInterface {

    public function handle() {
        // TODO: Implement handle() method.
        return [
            'blog_post_url' => 'izblog/post',
            'article_table_url' => 'izblog/articletable',
        ];
    }
}