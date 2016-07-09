<?php
/**
 * Created by: khoild@smartosc.com/mr.vjcspy@gmail.com
 * Date: 7/6/16
 * Time: 4:48 PM
 */

namespace Modules\IzBlog\Http\Controllers;


class BelieveController extends \Modules\IzCore\Http\Controllers\ThemeAbstractController {

    public function getIndex() {
        $this->setTheme('frontend.webelieve')->setLayout('default')->setViewFile('post-grid-default');
        return $this->renderHtml();
    }

    public function getPost() {
        $this->setTheme('frontend.webelieve')->setLayout('default')->setViewFile('post-detail-default');
        return $this->renderHtml();
    }
}