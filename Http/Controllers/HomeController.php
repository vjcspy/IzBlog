<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 22/06/2016
 * Time: 17:46
 */

namespace Modules\IzBlog\Http\Controllers;


use Modules\IzCore\Http\Controllers\ThemeAbstractController;

class HomeController extends ThemeAbstractController {

    public function getIndex() {
        $this->setTheme('frontend.default')->setLayout('default')->setViewFile('post-grid-default');

        return $this->renderHtml();
    }
}