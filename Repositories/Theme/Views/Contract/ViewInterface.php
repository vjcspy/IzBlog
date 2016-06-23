<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 23/06/2016
 * Time: 10:06
 */

namespace Modules\IzBlog\Repositories\Theme\Views\Contract;


interface ViewInterface {

    /**
     * Mỗi một view sẽ có config trong phần quản lý menu để tạo ra 1 page. Bao gồm 1 layout + 1 view
     * Phần này sẽ render ra config của view
     *
     * @return string
     */
    public function renderConfigForCustomPage();
}