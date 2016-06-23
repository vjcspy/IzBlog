<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 6/22/16
 * Time: 10:21 PM
 */

namespace Modules\IzBlog\Repositories;


use Modules\IzCore\Repositories\IzMenu;

/**
 * Management Menu in front end
 * @package modules\IzBlog\Repositories
 */
class MenuManagement extends IzMenu {

    const TYPE_POST = 'menu_post';
    const TYPE_CATEGORY = 'menu_category';
    const TYPE_LINK = 'menu_link';
    const TYPE_PAGE = 'menu_page';

}