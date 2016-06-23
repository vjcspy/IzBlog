<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 23/06/2016
 * Time: 10:39
 */

namespace Modules\IzBlog\Repositories\Theme\Views;


use Modules\IzBlog\Repositories\Theme\Views\Contract\ViewAbstract;

class PostGridDefault extends ViewAbstract {

    /**
     * @var string
     */
    protected $fileName = 'post-grid-default';
    /**
     * @var string
     */
    protected $themeName = 'frontend.default';
    /**
     * @var string
     */
    protected $layoutName = 'default';
    /**
     * @var bool
     */
    protected $shareLayout = false;
    /**
     * @var bool
     */
    protected $hasConfig = false;
}